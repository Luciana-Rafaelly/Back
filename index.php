<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
  </head> CREATE TABLE aluno (
    id INT AUTO_INCREMENT PRIMARY KEY,     -- Chave primária com autoincremento
    nome VARCHAR(100) NOT NULL,            -- Coluna para o nome, com até 100 caracteres
    cpf CHAR(11) NOT NULL UNIQUE,          -- Coluna para o CPF, com tamanho fixo de 11 caracteres e restrição UNIQUE
    senha VARCHAR(8) NOT NULL              -- Coluna para a senha, com até 8 caracteres
);
 
INSERT INTO aluno (nome, cpf, senha) VALUES
('João Silva', '12345678900', 'senha123'),
('Maria Oliveira', '98765432100', 'senha456'),
('Carlos Souza', '11223344550', 'senha789');
  <body>
   
    <form method="post" action="login.php">
      <label>CPF</label> 
  <input type="text" name="cpf"><br>
      <label>Senha:</label>
      <input type="password" name="senha"><br>
      <input type="submit" value="Entrar">
    </form>
  </body>
</html>
