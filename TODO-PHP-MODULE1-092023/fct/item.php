<?php
function displayItem($item){

    $html= '
        <li class="done">
            <div class="icheck-primary d-inline ml-2">
            <a href="toggleItem.php?item = '.$item["id"].'">';
                if($item['checked']){
                    $html.= '<i class="far fa-check-square"></i>';
                }else{
                    $html.= '<i class="far fa-square"></i>';
            }

    $html.='   
            </a></div>
            <span class="text">'.$item['intitule'].'</span>
            <div class="tools">
              <i class="fas fa-edit"></i>
              <i class="fas fa-trash-alt"></i>
            </div>
      </li>
    ';
    return $html;
}

function getItems(){
    return unserialize(file_get_contents(fileName));
}

function saveItems($items){
    file_put_contents(fileName,serialize($items));
}