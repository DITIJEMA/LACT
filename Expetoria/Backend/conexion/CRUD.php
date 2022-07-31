<?php
    interface CRUD { //! NO MODIFICAR, ESTE CODIGO SE REUTILIZARA PARA LAS DEMAS CLASES
        public function create();
        public function update();
        public function delete();
        
        public function read_by_id();

        public function read_all();

        public function read_active();

        public function read_inactive();
    }
?>