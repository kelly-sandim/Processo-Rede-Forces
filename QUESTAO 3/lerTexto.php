<?php 
/**
 * Criar uma simples classe que possa ler o conteúdo 
 * de um arquivo texto. Essa classe deverá conter um 
 * atributo privado que será usado para guardar o 
 * conteúdo do arquivo lido, um método para carregar o
 * arquivo e outro para visualizar o atributo.
 */
class leitorTexto {
    /**
     * Holds a private string
     * @var string
     */
    private $conteudoArquivo = '';
  
    /**
     * Sets the private string variable
     */
    public function setConteudo() {
      $this->string = 'This string is accessible by other methods';
      $conteudoArquivo = 'This string is only accessible from within this method';
    }

    public function getConteudo() {

    }  
}
?>