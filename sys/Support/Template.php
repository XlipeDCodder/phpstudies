<?php

namespace sys\Support;
use Twig\Lexer;
use sys\Nucleo\Helpers;
/**
 * Description of Template
 *
 * @author felipe.almeida
 */
class Template {
    private \Twig\Environment   $twig;
    
    public function __construct(string $directories) {
        $loader = new \Twig\Loader\FilesystemLoader($directories);
        $this->twig = new \Twig\Environment($loader, ['debug' => true]);
        $lexer = new Lexer($this->twig, array ($this->helpers()) );
        $this->twig->setLexer($lexer);
        $this->twig->addExtension(new \Twig\Extension\DebugExtension());
    }
    
    public function temp_render(string $view, array $data):string {
        return $this->twig->render($view, $data);
    }
    private function helpers():void {
        array(
            $this->twig->addFunction(
              new \Twig\TwigFunction('url', function(string $url = null){
                  return Helpers::slugify($url);
              } )      
            )
        );
    }
}
