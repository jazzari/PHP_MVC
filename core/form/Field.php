<?php
namespace app\core\form;
use app\core\Model;

class Field {
    public Model $model;
    public string $attribute;

    public function __construct(Model $model, $attribute){
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString(){
        return sprintf('
            <div class="form-group">
            <label for="%s" class="form-label">%s</label>
            <input type="text" class="form-control %s" id="%s" name="%s" value="%s">
            <div class="invalid-feedback">%s</div>
            </div>
        ', 
        $this->attribute,
        $this->attribute,
        $this->model->hasError($this->attribute) ? 'is-invalid' : '',
        
        $this->attribute,
        $this->attribute,
        $this->model->{$this->attribute},
        $this->model->getFirstError($this->attribute)
        );
    }
}
?>