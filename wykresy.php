<?php


 
class Drawer {

    protected    $handle,
                $a,
                $b,
                $OX_cross_point,
                $OY_cross_point,
                $scale = 50;
    
    
    public function __construct($a,$b) {
        $this->OX_cross_point = (-$b)/($a);
        $this->OY_cross_point = $b;
        
        $this->width = ($this->to_positive($this->OX_cross_point) * $this->scale * 2) + (2 * $this->scale);
        $this->height = ($this->to_positive($this->OY_cross_point) * $this->scale * 2) + (2 * $this->scale);
        
        $this->handle = ImageCreate($this->width,$this->height);
        $background = ImageColorAllocate($this->handle,0x00,0xff,0xff);
        
        ImageLine($this->handle,($this->width)/2,0,($this->width)/2,$this->height,$this->get_color('black'));
        ImageLine($this->handle,0,($this->height)/2,$this->width,($this->height)/2,$this->get_color('black'));
        
        for($i = 1 ; $i <= ($this->width)/$this->scale ; $i++) {
            ImageLine($this->handle,($i)*($this->scale),($this->height)/2-5,($i)*($this->scale),($this->height)/2+5,$this->get_color('black'));
        }
        
        for($i = 1 ; $i <= ($this->height)/$this->scale ; $i++) {
            ImageLine($this->handle,($this->width)/2-5,($i)*($this->scale),($this->width)/2+5,($i)*($this->scale),$this->get_color('black'));
        }
    }
    
    public function draw() {
        ImageLine($this->handle,($this->width/2)-($this->to_positive($this->OX_cross_point)) * $this->scale,($this->height)/2,($this->width)/2,($this->height/2)-($this->to_positive($this->OY_cross_point)) * $this->scale,$this->get_color('black'));
    }
    
    public function render() {
        header('Content-Type: image/png');
        ImagePNG($this->handle);
    }
    
    
    private function get_color($color) {
        switch($color) {
            case 'black':
                return ImageColorAllocate($this->handle,0x00,0x00,0x00);
            break;
            default:
                return ImageColorAllocate($this->handle,0xff,0xff,0xff);
            break;
        }
    }
    
    private function to_positive($digit) {
        if($digit < 0) return (-$digit);
        else return $digit;
    }

}

$draw = new Drawer(10,20);
$draw->draw();
$draw->render();

?>