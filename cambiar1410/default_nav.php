<style>
        .has-pendings {
            color: red;
            font-weight: bold;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }

        .dropdown-submenu:hover>.dropdown-menu {
            display: block;
        }
    </style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Sistema Navegación</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div id="navbar-container">
                <!-- Aquí cargaremos el navbar -->
                <?php 
                helper('Nav_helper');
                $cargo = 1;
                $menu = getNavbarItemsByRole($cargo);                
                echo view('partial_view', ['menu' => $menu]);
                ?>
            </div>
        </div>
    </nav>

    <button id="reloadNavbarBtn" class="btn btn-primary">Recargar Navbar</button>



<script>
$(document).ready(function(){
    $('#reloadNavbarBtn').on('click', function() {
        $.ajax({
                    url: '<?= base_url('/nav/reload') ?>',  // Ruta para cargar el navbar dinámico
                    method: 'GET',
                    success: function(response) {
                        // Reemplazar el contenido del contenedor del navbar
                        alert('entro');
                        $('#navbar-container').html(response);
                    },
                    error: function() {
                        alert('Error al cargar el menú de navegación.');
                    }
                });
       

            });
 
 
 
    $('.dropdown-submenu a.dropdown-toggle').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
});


</script>