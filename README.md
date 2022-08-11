Foi utilizado as  seguintes versões:
php -> 8.1
laravel -> 9

Para criar a base de dados basta rodar as migrations na base de dados 'brudam'.
Para preencher os dados das tabelas cliente e pedido, basta enviar requisicoes para os enpoints.

Os seguintes endpoints:

/api/cliente/
endpoint de visualizar todos os cliente. Ex retorno:
[
	{
		"idCliente": "1",
		"nome": "João Paulo",
		"telefone": "51990012120",
		"email": "joao@bol.com"
	},
	{...}
]

/api/cliente/{id}
endpoint de visualizar um cliente específico. Ex retorno:
[
	{
		"idCliente": "1",
		"nome": "João Paulo",
		"telefone": "51990012120",
		"email": "joao@bol.com"
	},
	{...}
]

/api/cliente/criarCliente
endpoint de criação de cliente.
Ex envio:
{
	"nome": "Paulo joão",
	"telefone": "323266565",
	"email": "pj34834@yahoo.com.br"
}
Ex retorno:
{
	"message": "Cliente criado"
}
mensagens de falha:
	'nome.required' => 'É necessário enviar o nome.',
	'telefone.required' => 'É necessário enviar o telefone',
	'email.required' => 'É necessário enviar o email.',
	'email.email' => 'É necessário enviar o email com o formato adequado.',
	'email.unique' => 'Esse email já está sendo utilizado.'

/api/pedido/
endpoint de visualizar todos os pedidos. Ex retorno:
[
	{
		"idPedido": 1,
		"dataEntrega": "2022-08-23",
		"valorFrete": 300.9,
		"descricao": "10 kg de carne",
		"idCliente": 1
	},
	{...}
]

/api/pedido/{id}
endpoint de visualizar um pedido específico. Ex retorno:
[
	{
		"idPedido": 1,
		"dataEntrega": "2022-08-23",
		"valorFrete": 30.9,
		"descricao": "100 kg de carne",
		"idCliente": 1
	}
]

/api/pedido/criarPedido
endpoint de criação de pedidos
Ex envio:
{
	"dataEntrega": "2022-12-23",
	"valorFrete": "35.30",
	"descricao": "100 litros de água",
	"idCliente": "2"
}
Ex retorno:
{
	"message": "Pedido criado"
}
mensagens de falha:
	'dataEntrega.required' => 'É necessário enviar a data de entrega.',
	'valorFrete.required' => 'É necessário enviar o valor do frete',
	'descricao.required' => 'É necessário enviar os dados do pedido.',
	'idCliente.required' => 'É necessário enviar o idCliente.'

Para exibir o relatório web basta acessar o endereço
/pedido/visualizarPedidos