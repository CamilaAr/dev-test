<?php
/* ----------------- DESCRIÇÃO DO TESTE -----------------------*/

/*

A classe LeagueTablr acompanha o score de cada jogador em uma liga. Depois de cada jogo, o score do jogador é salvo utilizanod a função recordResult.

O Rank de jogar na liga é calculado utilizando a seguinte lógica:

1- O jogador com a pontuação mais alta fica em primeiro lugar. O jogador com a pontuação mais baixa fica em último.
2- Se dois jogadores estiverem empatados, o jogador que jogou menos jogos é melhor posicionado.
3- Se dois jogadores estiverem empatados na pontuação e no número de jogos disputados, então o jogador que foi o primeiro na lista de jogadores é classificado mais alto.


Implemente a funação playerRank que retorna o jogador de uma posição escolhida do ranking.

Exemplo:

$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo $table->playerRank(1);


Todos os jogadores têm a mesma pontuação. No entanto, Arnold e Chris jogaram menos jogos do que Mike, e como Chris está acima de Arnold na lista de jogadores, ele está em primeiro lugar.

Portanto, o código acima deve exibir "Chris".


*/

class LeagueTable
{
	public function __construct($players)
    {
		$this->standings = array();
		foreach($players as $index => $p)
        {
			$this->standings[$p] = array
            (
                'index' => $index,
                'games_played' => 0, 
                'score' => 0
            );
        }
	}
		
	public function recordResult($player, $score)
    {
		$this->standings[$player]['games_played']++;

		$this->standings[$player]['score'] += $score;
		
	}
	
	public function playerRank($rank)
    {
		$ordem = $this->standings;
		// Compara se $a é maior que $b
			
			
			
        foreach ($ordem as $player=>$item){
			
			 var_dump($ordem[$player]);
			
			 
			foreach ($this->standings as $player2=>$item2){
				
				

				if($player["score"] < $player2["score"]){
					
					
					echo "<br>";
						/*$jogador1 = $this->standings[$player];
						$jogador2 = $this->standings[$player2];
						$this->standings[$player] =  $jogador2;
						$this->standings[$player2] =  $jogador1;
					*/
					
					
					$maiorponto = $player["score"];
				
				}
				
				if($player["games_played"] < $player2["games_played"]){
					$jogados =  $player["games_played"];
				} else{
					$jogados =  $player2["games_played"];
				}
				
			
		}
		
		
			
		}
		var_dump($this->standings);
		
	}
	
}
      
$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 4);
$table->recordResult('Chris', 3);
echo $table->playerRank(1);

