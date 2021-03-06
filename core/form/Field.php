<?php
namespace app\core\form;
use app\core\Model;

class Field {
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';

    public Model $model;
    public string $type;
    public string $attribute;

    public function __construct(Model $model, $attribute){
        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString(){
        return sprintf('
            <div class="form-group">
            <label for="%s" class="form-label">%s</label>
            <input type="%s" class="form-control %s" id="%s" name="%s" value="%s">
            <div class="invalid-feedback">%s</div>
            </div>
        ', 
        $this->attribute,
        $this->attribute,
        $this->type,
        $this->model->hasError($this->attribute) ? 'is-invalid' : '',
        
        $this->attribute,
        $this->attribute,
        $this->model->{$this->attribute},
        $this->model->getFirstError($this->attribute)
        );
    }

    public function passwordField(){
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

}
?>