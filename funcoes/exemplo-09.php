  <?php 

  $hierarquia  = array(
array(
'nome_cargo'=>'CEO',
'subordinados'=>array(
//Inicio: Diretor Comercial
	array(

		'nome_cargo'=>'Diretor Comercial',
		'subordinados'=>array(
			//Inicio: Gerente de vendas
			 array(
			 	'nome_cargo'=>'Gerente de Vendas'
			 )
			//Término: Gerente de Vendas

		)

	), //Término: Diretor Comercial


//Inicio: Diretor Finaceiro
array(

			'nome_cargo'=>'Diretor Financeiro',
			'subordinados'=>array(
			
				//Inicio: Gerente de contas a pagar
				array(

					'nome_cargo'=>'Gerente de contas a pagar',
					'subordinados'=>array(
						//Supervisor de pagamentos
						array(
							'nome_cargo'=>'Supervisor de Pagamentos'
						)

			)	//Termino: Supervisor de Pagamentos

			),//Termino: Gerente de contas a pagar
		
		//Inicio: Gerente de compras	
		array(
				'nome_cargo'=>'Gerente de Compras',
				'subordinados'=>array(
					//Inicio:  Supervisor de Suprimentos
					array(					
					'nome_cargo'=>'Supervisor de suprimentos',
					'subordinados'=>array(

						array(
							'nome_cargo'=>
							'Funcionário'
						)

					)
			)//Termino: Supervisor de Suprimentos
				)
			)
			//Termino:Gerente de compras


 			)	//Término: Diretor Financeiro

			)
		) 

	)	
 );

  function exibe($cargos){

$html = '<ul>';
foreach ($cargos as $cargo) {
	$html .="<li>";
	$html .= $cargo['nome_cargo'];
	if (isset($cargo['subordinados'])&& count($cargo['subordinados'])>0){
		$html .=exibe($cargo['subordinados']);
	}
	$html .= '</ul>';

}
$html .= '</ul>';

return $html;

  }

  echo exibe($hierarquia);

  ?>