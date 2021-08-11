<?php

namespace App\Plugins\Core\src\Lib\Ui;

class Html
{
    public function UserGroup($data){
        $style = Core_Ui()->Css()->bg_color($data->color);
        if($data->icon){
            $icon = $data->icon;
        }else{
            $icon = <<<HTML
<span>
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <circle cx="9" cy="7" r="4"></circle>
   <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
   <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
   <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
</svg>
</span>
HTML;

        }
        return <<<HTML
<span class="badge" style="{$style}">{$icon}{$data->name}</span>
HTML;

    }
}