<?php

class __Mustache_8a456a5c581d15152bad56b5a251e43f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'url' section
        $value = $context->find('url');
        $buffer .= $this->section964abcdcd7b3a1d14ad79fcf9972d86d($context, $indent, $value);

        return $buffer;
    }

    private function section4327b3f5bd30c1f1a4e794e76d68c970(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="{{url}}" class="aalink {{linkclasses}}" onclick="{{{onclick}}}">
            <img class="iconlarge activityicon" src="{{icon}}" alt="" role="presentation" aria-hidden="true" />
            <span class="instancename">
                {{{instancename}}} {{{altname}}}
            </span>
        </a>
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
                
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" class="aalink ';
                $value = $this->resolveValue($context->find('linkclasses'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" onclick="';
                $value = $this->resolveValue($context->find('onclick'), $context);
                $buffer .= $value;
                $buffer .= '">
';
                $buffer .= $indent . '            <img class="iconlarge activityicon" src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" alt="" role="presentation" aria-hidden="true" />
';
                $buffer .= $indent . '            <span class="instancename">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('instancename'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('altname'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section964abcdcd7b3a1d14ad79fcf9972d86d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#uservisible}}
        <a href="{{url}}" class="aalink {{linkclasses}}" onclick="{{{onclick}}}">
            <img class="iconlarge activityicon" src="{{icon}}" alt="" role="presentation" aria-hidden="true" />
            <span class="instancename">
                {{{instancename}}} {{{altname}}}
            </span>
        </a>
    {{/uservisible}}
    {{^uservisible}}
        <div class="{{textclasses}}">
            <img class="iconlarge activityicon" src="{{icon}}" alt="" role="presentation" aria-hidden="true" />
            <span class="instancename">
                {{{instancename}}} {{{altname}}}
            </span>
        </div>
    {{/uservisible}}
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
                
                // 'uservisible' section
                $value = $context->find('uservisible');
                $buffer .= $this->section4327b3f5bd30c1f1a4e794e76d68c970($context, $indent, $value);
                // 'uservisible' inverted section
                $value = $context->find('uservisible');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <div class="';
                    $value = $this->resolveValue($context->find('textclasses'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '            <img class="iconlarge activityicon" src="';
                    $value = $this->resolveValue($context->find('icon'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" alt="" role="presentation" aria-hidden="true" />
';
                    $buffer .= $indent . '            <span class="instancename">
';
                    $buffer .= $indent . '                ';
                    $value = $this->resolveValue($context->find('instancename'), $context);
                    $buffer .= $value;
                    $buffer .= ' ';
                    $value = $this->resolveValue($context->find('altname'), $context);
                    $buffer .= $value;
                    $buffer .= '
';
                    $buffer .= $indent . '            </span>
';
                    $buffer .= $indent . '        </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
