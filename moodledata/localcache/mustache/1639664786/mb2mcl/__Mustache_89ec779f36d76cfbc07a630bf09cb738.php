<?php

class __Mustache_89ec779f36d76cfbc07a630bf09cb738 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div>
';
        $buffer .= $indent . '    <div class="mod-indent-outer w-100">
';
        $buffer .= $indent . '        ';
        // 'moveicon' section
        $value = $context->find('moveicon');
        $buffer .= $this->section2e7d3cdfffee27291ffca5f384d8d23d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <div class="mod-indent ';
        // 'indent' section
        $value = $context->find('indent');
        $buffer .= $this->section36878bdaa9e8e32f8c8cc48f9fce1ffe($context, $indent, $value);
        $buffer .= ' ';
        // 'hugeindent' section
        $value = $context->find('hugeindent');
        $buffer .= $this->section2f1674f3cb83a46cb808a9f15ddc19e1($context, $indent, $value);
        $buffer .= '"></div>
';
        $buffer .= $indent . '        <div>
';
        // 'hasname' section
        $value = $context->find('hasname');
        $buffer .= $this->section9d542e6f89fd60066923430e44a5d22b($context, $indent, $value);
        // 'hasurl' inverted section
        $value = $context->find('hasurl');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="contentwithoutlink ';
            $value = $this->resolveValue($context->find('textclasses'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"> ';
            $value = $this->resolveValue($context->find('altcontent'), $context);
            $buffer .= $value;
            $buffer .= ' </div>
';
        }
        $buffer .= $indent . '
';
        // 'controlmenu' section
        $value = $context->find('controlmenu');
        $buffer .= $this->section62a4fdfe2cc2ddbdee2ac48d62596f23($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'activityinfo' section
        $value = $context->find('activityinfo');
        $buffer .= $this->section50b7af43e7d5272ee76ef84194237ff8($context, $indent, $value);
        // 'modavailability' section
        $value = $context->find('modavailability');
        $buffer .= $this->section07c2550700697d2a7be32cbde2700371($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'hasurl' section
        $value = $context->find('hasurl');
        $buffer .= $this->section551ea1170e3ae93941da463ce499feab($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2e7d3cdfffee27291ffca5f384d8d23d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{moveicon}}} ';
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
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('moveicon'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36878bdaa9e8e32f8c8cc48f9fce1ffe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'mod-indent-{{indent}}';
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
                
                $buffer .= 'mod-indent-';
                $value = $this->resolveValue($context->find('indent'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f1674f3cb83a46cb808a9f15ddc19e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'mod-indent-huge';
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
                
                $buffer .= 'mod-indent-huge';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d989193f66ca0976e83bdfdaf8367ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> core/inplace_editable }} ';
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
                
                $buffer .= ' ';
                if ($partial = $this->mustache->loadPartial('core/inplace_editable')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d542e6f89fd60066923430e44a5d22b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="activityinstance">
                {{#cmname}} {{> core/inplace_editable }} {{/cmname}}
                {{{grouping}}}
                {{{afterlink}}}
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
                
                $buffer .= $indent . '            <div class="activityinstance">
';
                $buffer .= $indent . '                ';
                // 'cmname' section
                $value = $context->find('cmname');
                $buffer .= $this->section5d989193f66ca0976e83bdfdaf8367ef($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('grouping'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('afterlink'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62a4fdfe2cc2ddbdee2ac48d62596f23(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core_courseformat/local/content/cm/controlmenu }}
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
                
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/controlmenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50b7af43e7d5272ee76ef84194237ff8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core_course/activity_info}}
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
                
                if ($partial = $this->mustache->loadPartial('core_course/activity_info')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07c2550700697d2a7be32cbde2700371(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core_courseformat/local/content/cm/availability }}
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
                
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/cm/availability')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section551ea1170e3ae93941da463ce499feab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="contentafterlink {{textclasses}}">
                    {{{altcontent}}}
                    {{^hasname}} {{{grouping}}} {{/hasname}}
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
                
                $buffer .= $indent . '                <div class="contentafterlink ';
                $value = $this->resolveValue($context->find('textclasses'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('altcontent'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                // 'hasname' inverted section
                $value = $context->find('hasname');
                if (empty($value)) {
                    
                    $buffer .= ' ';
                    $value = $this->resolveValue($context->find('grouping'), $context);
                    $buffer .= $value;
                    $buffer .= ' ';
                }
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
