<?php

    namespace App;

    class Arena
    {
        private array $monsters = [];
        private Hero $hero;
        private int $size = 10;

        public function __construct(Hero $hero, array $monsters){
            $this->hero = $hero;
            $this->monsters = $monsters;
        }

        /**
         * Get the value of monsters
         */ 
        public function getMonsters()
        {
                return $this->monsters;
        }

        /**
         * Set the value of monsters
         *
         * @return  self
         */ 
        public function setMonsters($monsters)
        {
                $this->monsters = $monsters;

                return $this;
        }

        /**
         * Get the value of hero
         */ 
        public function getHero()
        {
                return $this->hero;
        }

        /**
         * Set the value of hero
         *
         * @return  self
         */ 
        public function setHero($hero)
        {
                $this->hero = $hero;

                return $this;
        }

        /**
         * Get the value of size
         */ 
        public function getSize()
        {
                return $this->size;
        }

        /**
         * Set the value of size
         *
         * @return  self
         */ 
        public function setSize($size)
        {
                $this->size = $size;

                return $this;
        }
    }