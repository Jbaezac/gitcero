<?php
public function reloadnav(){
                // Cargar el helper
                helper('Nav_helper');
        
                // Obtener el menú dinámico, por ejemplo, para el cargo 1
                $cargo = 1;
                $menu = getNavbarItemsByRole($cargo);
        
                // Retornar solo la vista del menú
                return view('partial_view', ['menu' => $menu]);
    }

    public function margarita(){
    
        /*
        helper('Nav');
        $this->setcargo(1);
        $data = [
            'menu'=>getNavbarItemsByRole(1)
        ];
        */

        return view('marga');
    }