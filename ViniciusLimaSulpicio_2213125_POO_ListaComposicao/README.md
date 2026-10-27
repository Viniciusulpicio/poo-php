# Composição e arrays em PHP

## Dados do aluno

- Vinicius Lima Sulpicio
- RA: 2213125
- Turma: BCC - B


## 1. Confira os pré-requisitos

Tenha **PHP 8.4 ou superior da série 8.x** e **Composer 2** instalados. Confira no terminal:

```sh
php -v
composer --version
```

## 2. Prepare o projeto

Abra o terminal na pasta que contém `composer.json` e `index.php`. No VS Code, abra a pasta do projeto e selecione **Terminal → Novo Terminal**.

Execute:

```sh
composer install
```

Esse comando gera `vendor/autoload.php`, necessário para carregar as classes do projeto.

## 3. Execute

No mesmo terminal:

```sh
php index.php
```

## Comando adicional do Composer

Para regenerar o autoload, se necessário:

```sh
composer dump-autoload
```

Se aparecer erro de `vendor/autoload.php` ausente, execute `composer install`. Se o terminal não encontrar `composer.json` ou `index.php`, confira se está na pasta correta.


