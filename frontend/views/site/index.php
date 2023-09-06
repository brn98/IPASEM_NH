<!-- $this->render('/layouts/_modal')  -->

<?= $this->render('/layouts/_carousel') ?>

<!-- acesso rápido -->
<div class="container text-center d-flex justify-content-center position-relative">
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 mt-n5 mx-auto">
        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col d-none d-md-block">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col d-none d-md-block">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col d-none d-md-block">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
        <div class="col d-none d-md-block">
            <a href="#" class="text-decoration-none">
                <div class="p-3 border bg-light rounded d-flex justify-content-evenly align-items-center"><i
                        class="fas fa-calendar-check fa-2x text-warning"></i>Row
                    column</div>
            </a>
        </div>
    </div>
</div>

<div class="container">
    <hr>
</div>
<!-- cards de noticias -->
<div class="container my-3">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td class="custom-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Etiam quis vestibulum turpis. Pellentesque gravida, ante nec molestie malesuada, odio nunc
                    venenatis purus, at pulvinar mi elit eget ligula. Etiam blandit aliquet rhoncus. Aenean non urna mi.
                    Sed nec libero non justo vehicula lobortis quis quis dui. Mauris vel justo nec mi ultrices porta.
                    Fusce id dignissim quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                    cubilia curae; Proin lobortis elementum dui et iaculis. Etiam molestie, ipsum non mattis
                    pellentesque, ex massa finibus nisl, sed dictum justo quam non ex. Integer massa dui, tincidunt a
                    est sed, eleifend semper lacus.</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis vestibulum turpis. Pellentesque
                    gravida, ante nec molestie malesuada, odio nunc venenatis purus, at pulvinar mi elit eget ligula.
                    Etiam blandit aliquet rhoncus. Aenean non urna mi. Sed nec libero non justo vehicula lobortis quis
                    quis dui. Mauris vel justo nec mi ultrices porta. Fusce id dignissim quam. Vestibulum ante ipsum
                    primis in faucibus orci luctus et ultrices posuere cubilia curae; Proin lobortis elementum dui et
                    iaculis. Etiam molestie, ipsum non mattis pellentesque, ex massa finibus nisl, sed dictum justo quam
                    non ex. Integer massa dui, tincidunt a est sed, eleifend semper lacus.</td>
            </tr>
            <!-- Mais linhas da tabela... -->
        </tbody>
    </table>

</div>
<style>
    .custom-truncate {
        max-width: 500px; /* Defina a largura máxima desejada */
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
</style>