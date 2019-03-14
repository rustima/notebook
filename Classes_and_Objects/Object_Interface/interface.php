<?php 
/*
 * ����ӿ�
 * ʹ�ýӿڣ�interface��������ָ��ĳ�������ʵ����Щ������������Ҫ������Щ�����ľ������ݡ�
 * �ӿ���ͨ��interface�ؼ���������ģ��������׼����һ���������ж�������з������ǿյġ�
 * �ӿ��ж�������з����������ǹ��У����ǽӿڵ�����
 * 
 * ʵ��(implements)
 * Ҫʵ��һ���ӿڣ�ʹ��implements�����������б���ʵ�ֽӿ��ж�������з���������ᱨ��������
 * �����ʵ�ֶ���ӿڣ��ö������ָ�����ӿڵ�����
 * ʵ�ֶ���ӿ�ʱ���ӿ��еķ�������������
 * �ӿ�Ҳ���Լ̳У�ʹ��extends������
 * ��Ҫʵ�ֽӿڣ�����ʹ�úͽӿ���������ķ�����ȫһ�µķ�ʽ������ᵼ����������
 * 
 * ����
 * �ӿ���Ҳ���Զ��峣�����ӿڳ������ೣ����ʹ����ȫ��ͬ�����ǲ��ܱ�������ӽӿڸ���
 * 
 */

//����һ��'iTemplate'�ӿ�
interface iTemplate{
    public function setVariable($name,$var);
    public function getHtml($template);
}

//ʵ�ֽӿ�
class Template implements iTemplate{
    private $vars = array();
    
    public function setVariable($name,$var){
        $this->vars[$name] = $var;
    }
    
    public function getVariable(){
        return $this->vars;
    }
    
    public function getHtml($template){
        foreach ($this->vars as $name => $value){
            $template = str_replace('{'.$name.'}',$value,$template);
        }
        
        return $template;
    }
}

$test = new Template();
$test->setVariable("name1","var1");
// var_dump($test->getVariable());
var_dump($test->getHtml("{name1}template"));
?>