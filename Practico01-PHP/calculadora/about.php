<?php

function getAbout()
{
    echo '
         <ul style="align-self:start;">
            <li><a href="ejercicio6/about/francisco">Francisco</a></li>
            <li><a href="ejercicio6/about/julio">Julio</a></li>
            <li><a href="ejercicio6/about/soledad">Soledad</a></li>
        </ul>';
}

function showDeveloper($developer)
{
    if ($developer == 'francisco') {
        echo '
        <div class="conteiner">
            <h2>Francisco</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <label>---</label>
            <img src="calculadora/img/img_avatar_h.png" />
        </div>';
    }
    if ($developer == 'julio') {
        echo '
        <div class="conteiner">
            <h2>Julio</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
           <label>---</label>
            <img src="calculadora/img/img_avatar_h.png" />
        </div>';
    }
    if ($developer == 'soledad') {
        echo '
        <div class="conteiner">
            <h2>Soledad</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            <label>---</label>
            <img src="calculadora/img/img_avatar_m.png" />
        </div>';
    }
}
