<?php get_header(); ?>

    <main>
    <div class="container">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>CPF</label>
                <input type="text" class="form-control" id="$number" required>
            </div>
            <div class="form-group col-md-4">
                <label>E-mail</label>
                <input type="text" class="form-control" id="$email"required>
            </div>
            <div class="form-group col-md-4">
                <label>Idade</label>
                <input type="text" class="form-control" required>
            </div>
            <div class="form-group col-md-4">
                <label>Nome Completo</label>
                <input type="text" class="form-control" required>
            </div>
        </div>

    </main>
<?php

function validateCPF($number) {

    $cpf = preg_replace('/[^0-9]/', "", $number);

}

if (strlen($cpf) != 11) {
    return false;
}

if (strlen($cpf) != 11 || preg_match('/([0-9])\1{10}/', $cpf)) {
    return false;
}

$sum = 0;
$number_to_multiplicate = 10;

for ($index = 0; $index < 9; $index++) {
    $sum += $cpf[$index] * ($number_to_multiplicate--); 
}

$result = (($sum * 10) % 11);

$number_quantity_to_loop = [9, 10];

foreach ($number_quantity_to_loop as $item) {

    $sum = 0;
    $number_to_multiplicate = $item + 1;
  
    for ($index = 0; $index < $item; $index++) {

        $sum += $cpf[$index] * ($number_to_multiplicate--);
  
    }

    $result = (($sum * 10) % 11);

}

if ($cpf[$item] != $result) {
	return false;
};

function validaemail($email){
	if (!ereg('^([a-zA-Z0-9.-_])*([@])([a-z0-9]).([a-z]{2,3})',$email)){
		$mensagem='E-mail Inv&aacute;lido!';
		return $mensagem;
    }
    else{
		$dominio=explode('@',$email);
		if(!checkdnsrr($dominio[1],'A')){
			$mensagem='E-mail Inv&aacute;lido!';
			return $mensagem;
		}
		else{return true;}
	}
}

get_footer(); ?>