## Financeiro Web Remake

Desenvolvido em 2020, o [FinanceiroWeb](https://github.com/ropehapi/financeiro-web) é uma plataforma de gestão financeira casual desenvolvida durante um curso básico de PHP na academia WMBarros treinamento em TI.

Hoje, dois anos depois, marcando o término dos meus estudos em PHP, decidi fazer o FinanceiroWebBoosted, que seria uma refatoração do projeto original, visando aplicar as melhores e mais modernas técnicas de desenvolvimento, para que ao final da refatoração, eu possa contemplar a diferença entre o meu primeiro e meu último projeto de estudos em PHP.

### Funcionalidades
- Uma área do usuário onde ele possa:
    - Visualizar seus dados.
    - Alterar seus dados cadastrais.
    - Alterar seu email de acesso.
    - Alterar sua senha.
- Uma área onde ele possa cadastrar várias "Carteiras".
- Uma área onde ele possa cadastrar várias categorias a serem utilizadas nas movimentações.
- Uma área onde ele possa cadastrar várias movimentações de entrada e saída.
- Um Dashboard onde ele possa acompanhar em gráficos seus ganhos e despesas.

### Estrutura
- Backend
    - PHP v8.1.2
    - Laravel v8.83.25
    - [Laravel UI Auth](https://github.com/laravel/ui)
- Front-end
    - Bootstrap
    - Jquery
    - [Template AdminLTE3](https://github.com/jeroennoten/Laravel-AdminLTE)
    
### Instalação
- `$ git clone https://github.com/ropehapi/FinanceiroWebBoosted`
- `$ composer update`
- `$ php artisan adminlte:install`
- `$ php artisan ui bootstrap --auth`
- `$ php artisan adminlte:install --only=auth_views`
- `$ php artisan migrate`

