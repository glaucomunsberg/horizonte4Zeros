<?php

    class PerguntasModel extends CI_Model{
        
        /**
         * Método que retorna a pergunta segundo sua colocação
         * 
         * @param Numero da pergunta
         * @return string{questao:"text",questaoSobre:"text",questaoNum:Numerico,questaoCor:"text"}
         */
        function perguntaJaguarao($perguntaNumero){
            switch ($perguntaNumero) {
                case 1:
                    $data['questaoSobre'] = lang('peopleGridQuestao1');
                    $data['questao'] = lang('peopleGridQuestao1Def');
                    $data['questaoNum'] = 1;
                    break;
                case 2:
                    $data['questaoSobre'] = lang('peopleGridQuestao2');
                    $data['questao'] = lang('peopleGridQuestao2Def');
                    $data['questaoNum'] = 2;
                    break;
                case 3:
                    $data['questaoSobre'] = lang('peopleGridQuestao3');
                    $data['questao'] = lang('peopleGridQuestao3Def');
                    $data['questaoNum'] = 3;
                    break;
                case 4:
                    $data['questaoSobre'] = lang('peopleGridQuestao4');
                    $data['questao'] = lang('peopleGridQuestao4Def');
                    $data['questaoNum'] = 4;
                    break;
                case 5:
                    $data['questaoSobre'] = lang('peopleGridQuestao5');
                    $data['questao'] = lang('peopleGridQuestao5Def');
                    $data['questaoNum'] = 5;
                    break;
                case 6:
                    $data['questaoSobre'] = lang('peopleGridQuestao6');
                    $data['questao'] = lang('peopleGridQuestao6Def');
                    $data['questaoNum'] = 6;
                    break;
                case 7:
                    $data['questaoSobre'] = lang('peopleGridQuestao7');
                    $data['questao'] = lang('peopleGridQuestao7Def');
                    $data['questaoNum'] = 7;
                    break;
                case 8:
                    $data['questaoSobre'] = lang('peopleGridQuestao8');
                    $data['questao'] = lang('peopleGridQuestao8Def');
                    $data['questaoNum'] = 8;
                    break;
                case 9:
                    $data['questaoSobre'] = lang('peopleGridQuestao9');
                    $data['questao'] = lang('peopleGridQuestao9Def');
                    $data['questaoNum'] = 9;
                    break;
                case 10:
                    $data['questaoSobre'] = lang('peopleGridQuestao10');
                    $data['questao'] = lang('peopleGridQuestao10Def');
                    $data['questaoNum'] = 10;
                    break;
                case 11:
                    $data['questaoSobre'] = lang('peopleGridQuestao11');
                    $data['questao'] = lang('peopleGridQuestao11Def');
                    $data['questaoNum'] = 11;
                    break;
                case 12:
                    $data['questaoSobre'] = lang('peopleGridQuestao12');
                    $data['questao'] = lang('peopleGridQuestao12Def');
                    $data['questaoNum'] = 12;
                    break;
                case 13:
                    $data['questaoSobre'] = lang('peopleGridQuestao13');
                    $data['questao'] = lang('peopleGridQuestao13Def');
                    $data['questaoNum'] = 13;
                    break;
                case 14:
                    $data['questaoSobre'] = lang('peopleGridQuestao14');
                    $data['questao'] = lang('peopleGridQuestao14Def');
                    $data['questaoNum'] = 14;
                    break;
                case 15:
                    $data['questaoSobre'] = lang('peopleGridQuestao15');
                    $data['questao'] = lang('peopleGridQuestao15Def');
                    $data['questaoNum'] = 15;
                    break;
                case 16:
                    $data['questaoSobre'] = lang('peopleGridQuestao16');
                    $data['questao'] = lang('peopleGridQuestao16Def');
                    $data['questaoNum'] = 16;
                    break;
                case 17:
                    $data['questaoSobre'] = lang('peopleGridQuestao17');
                    $data['questao'] = lang('peopleGridQuestao17Def');
                    $data['questaoNum'] = 17;
                    break;
                case 18:
                    $data['questaoSobre'] = lang('peopleGridQuestao18');
                    $data['questao'] = lang('peopleGridQuestao18Def');
                    $data['questaoNum'] = 18;
                    break;
                case 19:
                    $data['questaoSobre'] = lang('peopleGridQuestao19');
                    $data['questao'] = lang('peopleGridQuestao19Def');
                    $data['questaoNum'] = 19;
                    break;
                case 20:
                    $data['questaoSobre'] = lang('peopleGridQuestao20');
                    $data['questao'] = lang('peopleGridQuestao20Def');
                    $data['questaoNum'] = 20;
                    break;
                case 21:
                    $data['questaoSobre'] = lang('peopleGridQuestao21');
                    $data['questao'] = lang('peopleGridQuestao21Def');
                    $data['questaoNum'] = 21;
                    break;
                case 22:
                    $data['questaoSobre'] = lang('peopleGridQuestao22');
                    $data['questao'] = lang('peopleGridQuestao22Def');
                    $data['questaoNum'] = 22;
                    break;
                case 23:
                    $data['questaoSobre'] = lang('peopleGridQuestao23');
                    $data['questao'] = lang('peopleGridQuestao23Def');
                    $data['questaoNum'] = 23;
                    break;
                default:
                    $data['questaoSobre'] = lang('peopleGridQuestaoNone');
                    $data['questao'] = lang('peopleGridQuestaoNoneDef');
                    $data['questaoNum'] = 0;
                    break;
            }
            $data['questaCor'] = 'red';
            return $resposta['resposta']=$data;
        }
        
        /**
         * Retorna um array contendo todas as perguntas
         * @return array
         */
        public function getPerguntas(){
            $perguntas = array();
            
            for ($a = 1; $a <= $this->totalPerguntasJaguarao(); $a++){
                array_push($perguntas, $this->perguntaJaguarao($a));
            }
            
            return $perguntas;
        }
        
        /**
         * Retorna o total de Peguntas que há para responder
         * @return string{numerico}
         */
        public function totalPerguntasJaguarao(){
            return 23;
        }
    }