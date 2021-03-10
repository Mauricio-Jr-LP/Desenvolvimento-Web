<?php 

    class vinculo extends equipe extends membro {
        
        public $equipe_id;
        public $membro_id;
        
        function __construct($equipe_id, $membro_id){
            $this->equipe_id = $equipe_id;
            $this->membro_id = $membro_id;
		}	

        public function getEquipe_id()
        {
            return $this->equipe_id;
        }

        public function setEquipe_id($equipe_id)
        {
            $this->equipe_id = $equipe_id;
        }
        
        public function getMembro_id()
        {
            return $this->membro_id;
        }

        public function setMembro_id($membro_id)
        {
            $this->membro_id = $membro_id;
        }
    }
?>    