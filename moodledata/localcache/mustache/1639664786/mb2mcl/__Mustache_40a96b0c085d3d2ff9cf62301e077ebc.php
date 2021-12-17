<?php

class __Mustache_40a96b0c085d3d2ff9cf62301e077ebc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'summarytext' section
        $value = $context->find('summarytext');
        $buffer .= $this->section0276c91b86224e7ba5f3a03bbd2f726c($context, $indent, $value);

        return $buffer;
    }

    private function section0276c91b86224e7ba5f3a03bbd2f726c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="summarytext">
    {{{summarytext}}}
</div>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="summarytext">
';
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('summarytext'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
