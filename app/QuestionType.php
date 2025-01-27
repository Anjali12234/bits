<?php

namespace App;

enum QuestionType:string
{
    case AboutUs = 'about-us';
    case Index = 'index';
    case Service = 'service';
    case Team = 'team';
 

    public function label(): string
    {
        return self::getLabel($this);
    }  

    public static function getLabel(self $value): string
    {
        return match ($value) {
            self::AboutUs => 'about-us',
            self::Index => 'index',
            self::Service => 'service',
            self::Team => 'team',
           
        };
    }

    public static function getValuesWithLabels(): array
    {
        $valuesWithLabels = [];

        foreach (self::cases() as $value) {
            $valuesWithLabels[] = [
                'value' => $value,
                'label' => $value->label(),
            ];
        }

        return $valuesWithLabels;
    }
}
