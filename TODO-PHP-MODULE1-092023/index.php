<?php
    include "./config/appName.php";
    include "./html/html.php";
    include "fct/item.php";
if (!file_exists(fileName)){
    file_put_contents(fileName,serialize([]));
}

?>

        <div class="ajout" style=" padding: 20px 0 0 20px">
            <h2 id="title"><?=appName?></h2>
            <div class="formulaire">

<!--                debut barre d'ajout-->
                <form action="addItem.php" method="post">
                    <div class="formulaireAjout">
                        <input type="text" name = "intitule" class="formAjout">
                        <div>
                            <button id="btnOk" type="submit">+</button>
                        </div>
                    </div>
                </form>


<!--                fin barre d'ajout-->


                <!--debut de item-->
                <ul class="todo-list ui-sortable" data-widget="todo-list">

                <?php
                    $items = getItems();
                        foreach ($items as $item){
                            echo displayItem($item);
                    }
                    ?>
                </ul>

                <!--                fin de item-->

            </div>
        </div>
    </div>

<?php
    include "html/footer.php";
?>