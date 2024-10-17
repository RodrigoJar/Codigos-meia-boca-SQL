 <?php

// Criar conexão com banco SQLite

$db = new SQLite3('meubanco.db');

// Criar tabela se não existir

$db->exec('CREATE TABLE IF NOT EXISTS usuarios (id INTEGER PRIMARY KEY   AUTOINCREMENT, nome TEXT, email TEXT)');

// Inserir dados na tabela ' usuarios'

$db->exec("INSERT INTO usuarios (nome, email) VALUES ('Maria Silva', 'maria@example.com')");
$db->exec("INSERT INTO usuarios (nome, email) VALUES ('Simone Gama', 'simone@example.com')");

// Consultar dados da tabela 

$result = $db->query('SELECT id,nome,email FROM usuarios');

// Exibir resultados

echo"<h2>Usuarios cadastrados:</h2>";
while ($row = $result->fetchArray()){
  echo "ID: " . $row['id'] ."-nome: " . $row['nome'] . "-Email: " . $row['email'] . "<br>";
}

$db -> close ();
?>
