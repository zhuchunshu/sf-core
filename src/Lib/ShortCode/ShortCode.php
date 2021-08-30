<?php


namespace App\Plugins\Core\src\Lib\ShortCode;


use Hyperf\Utils\Arr;
use Hyperf\Utils\Str;

class ShortCode
{

    public function add($tag,$callback): void
    {
        Itf()->add("ShortCode",$tag,["callback" => $callback]);
    }

    public function all(): array
    {
        return Itf()->get("ShortCode");
    }

    public function get($tag):bool|array{
        if($this->has($tag)){
            return Itf()->get("ShortCode")[$tag];
        }
        return false;
    }

    public function has($tag):bool{
        if(Arr::has(Itf()->get("ShortCode"),"ShortCode_".$tag)){
            return true;
        }
        return false;
    }

    public function make_tag($tag): array{
        $start = "[".$tag."]";
        $end = "[".$tag."/]";
        return [
            "start" => $start,
            "end" => $end,
        ];
    }


    public function make($method,...$content)
    {
        return (new Make())->$method(...$content);
    }



    public function callback($callback,...$parameter){
        $class = Str::before($callback,"@");
        $method = Str::after($callback,"@");
        return (new $class())->$method(...$parameter);
    }
}