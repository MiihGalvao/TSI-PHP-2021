<?php

include 'Usuario.class.php';

class main{

    var $usuario;

    function run(){

        $this->instanciaUsuario();

        echo "O atributo é: " . $this->usuario->nome . "<br><br>";



$this->usuario->addUser('Milena Galvão');
+
+        echo "<br><br>O atributo é: " . $this->usuario->nome . "<br><br>";
+
+        $this->usuario->addUser('Milena');
+
+        echo "<br><br>O atributo é: " . $this->usuario->nome . "<br><br>";
+    }
+
+    function instanciaUsuario(){
+
+        $this->usuario = new Usuario;
+    }
+}
+
+$main = new Main;
+$main->run();
}






