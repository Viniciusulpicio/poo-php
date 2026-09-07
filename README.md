# poo-php

Este repositório contém implementações práticas em aula e comentadas de programação orientada a objeto escritas em linguagem PHP.

---

## Pré-requisitos

- **PHP** (versão 8.2 ou superior)
- **Composer** (gerenciador de dependências e autoload do PHP)

---

## Como instalar o Composer (caso não tenha)

Se o comando `composer` ainda não estiver disponível na sua máquina, você pode instalá-lo de duas formas:

### Opção 1: Instalação no usuário (recomendada / sem sudo)

```bash
# Baixa e instala o composer executável em ~/.local/bin
curl -sS https://getcomposer.org/installer | php -- --install-dir=~/.local/bin --filename=composer
```

> **Nota:** Certifique-se de que `~/.local/bin` está no seu `$PATH` (geralmente já vem configurado). Para verificar, execute `composer --version`.

### Opção 2: Via gerenciador de pacotes do sistema

- **Arch Linux:**
  ```bash
  sudo pacman -S composer
  ```

---

## Como preparar o projeto após baixar ou clonar

Como a pasta `vendor/` é ignorada pelo Git (via `.gitignore`), sempre que você clonar o repositório ou baixar em uma nova máquina, será necessário gerar os arquivos de autoload das classes:

1. Acesse a pasta do projeto que deseja executar (por exemplo, `vinicius_2213125_POO_Unidade3` ou `primeiro_projeto`):
   ```bash
   cd vinicius_2213125_POO_Unidade3
   ```

2. Execute o comando para gerar o autoload das classes:
   ```bash
   composer dump-autoload
   ```
   *(ou `composer install`)*

---

##  Como executar o código

Após ter gerado o autoload, você pode executar o script:

```bash
# Dentro da pasta do projeto:
php index.php

# Ou diretamente da raiz do repositório:
php vinicius_2213125_POO_Unidade3/index.php
```
