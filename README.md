# Consumo de API do IBGE com PHP

![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php)
![License](https://img.shields.io/badge/License-MIT-yellow.svg?style=for-the-badge)

> Cliente HTTP em PHP desenvolvido para consumir a API RESTful do IBGE. O projeto demonstra a realização de requisições GET com cURL, parsing de dados JSON e a aplicação do princípio de Separação de Responsabilidades (SoC) na estruturação do código.

## 📖 Sobre o Projeto

Este projeto foi desenvolvido como parte de um trabalho acadêmico com o objetivo de colocar em prática conceitos fundamentais do desenvolvimento backend com PHP. A aplicação consiste em uma página web que consome dados públicos da API de Localidades do IBGE para buscar e exibir as cinco grandes regiões do Brasil em uma tabela.

Embora simples em sua funcionalidade, o foco principal foi a implementação de boas práticas e a correta utilização de ferramentas e conceitos relevantes para o mercado de trabalho.

## ✨ Funcionalidades

* **Comunicação com API Externa:** Realiza uma requisição HTTP para um endpoint da API pública do IBGE.
* **Processamento de Dados:** Decodifica a resposta em formato JSON para um array manipulável em PHP.
* **Exibição Estruturada:** Renderiza os dados obtidos em uma tabela HTML de forma organizada.
* **Código Modular:** A lógica de acesso à API foi separada da camada de apresentação (view), seguindo o princípio de Separação de Responsabilidades.

## 🚀 Tecnologias Utilizadas

Este projeto foi construído utilizando as seguintes tecnologias e conceitos:

* **Linguagem:** PHP 8+
* **Ferramentas:**
    * **cURL:** Para a criação e execução de requisições HTTP.
    * **Git & GitHub:** Para versionamento e hospedagem do código.
* **Ambiente de Desenvolvimento:**
    * Servidor Web Apache (via XAMPP / LAMP).
* **Conceitos Chave Aplicados:**
    * Consumo de **API RESTful**.
    * **Parsing** de dados no formato **JSON**.
    * Desenvolvimento de um **Cliente HTTP**.
    * Princípio de Design de Software: **Separação de Responsabilidades (SoC)**.
    * Protocolo **HTTP** (Método GET).

