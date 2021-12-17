<?php

class __Mustache_66103f1550fcca4fc476590a7fd9de4f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<li id="section-';
        $value = $this->resolveValue($context->find('num'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    class="section main ';
        // 'onlysummary' section
        $value = $context->find('onlysummary');
        $buffer .= $this->sectionA0d9db6ba11d7b6bcca170f8d7ae948d($context, $indent, $value);
        $buffer .= ' clearfix
';
        $buffer .= $indent . '            ';
        // 'ishidden' section
        $value = $context->find('ishidden');
        $buffer .= $this->section5a8152d3d9f2c97a8df7cb314c7a68ea($context, $indent, $value);
        $buffer .= ' ';
        // 'iscurrent' section
        $value = $context->find('iscurrent');
        $buffer .= $this->sectionFabacf5fcd35f66c980bc5b597ed4c91($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        // 'isstealth' section
        $value = $context->find('isstealth');
        $buffer .= $this->sectionDd936c2a69a972ffdd63f1e0216d6abb($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-sectionid="';
        $value = $this->resolveValue($context->find('num'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-sectionreturnid="';
        $value = $this->resolveValue($context->find('sectionreturnid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-for="section"
';
        $buffer .= $indent . '    data-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '    data-number="';
        $value = $this->resolveValue($context->find('num'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    ';
        // 'singleheader' section
        $value = $context->find('singleheader');
        $buffer .= $this->sectionF1c4cc002642338f80b53db456660a86($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    <div class="left side">';
        // 'iscurrent' section
        $value = $context->find('iscurrent');
        $buffer .= $this->section5d0ebc0d24d67a42a3360a7ef71b50a5($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '    <div class="right side">
';
        // 'controlmenu' section
        $value = $context->find('controlmenu');
        $buffer .= $this->section5ab0625eae779763c283ec4063bafde3($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    ';
        // 'header' section
        $value = $context->find('header');
        $buffer .= $this->sectionF1c4cc002642338f80b53db456660a86($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    <div id="coursecontentcollapse';
        $value = $this->resolveValue($context->find('num'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '         class="content ';
        // 'iscoursedisplaymultipage' inverted section
        $value = $context->find('iscoursedisplaymultipage');
        if (empty($value)) {
            
            $buffer .= '
';
            $buffer .= $indent . '             ';
            // 'sitehome' inverted section
            $value = $context->find('sitehome');
            if (empty($value)) {
                
                $buffer .= 'course-content-item-content collapse ';
                // 'contentexpanded' section
                $value = $context->find('contentexpanded');
                $buffer .= $this->section14c724f5a6859d4cc56d9befdffaeac5($context, $indent, $value);
            }
            $buffer .= '
';
            $buffer .= $indent . '         ';
        }
        $buffer .= '">
';
        // 'availability' section
        $value = $context->find('availability');
        $buffer .= $this->section1ce960cf708aa3a2d85874f50bacd923($context, $indent, $value);
        $buffer .= $indent . '        <div class="summary">
';
        // 'summary' section
        $value = $context->find('summary');
        $buffer .= $this->sectionCcd0c3fb2a2df6ade916d5dd2d012e50($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        ';
        // 'cmsummary' section
        $value = $context->find('cmsummary');
        $buffer .= $this->section14012f1362a3abe15c46b065b81a918f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        // 'cmlist' section
        $value = $context->find('cmlist');
        $buffer .= $this->section3042ddd6b3e59b4772ea6cc6d6298388($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('cmcontrols'), $context);
        $buffer .= $value;
        $buffer .= '
';
        // 'insertafter' section
        $value = $context->find('insertafter');
        $buffer .= $this->sectionDb01b1c61d59718bc2ea11f62da1adc4($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</li>
';

        return $buffer;
    }

    private function sectionA0d9db6ba11d7b6bcca170f8d7ae948d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' section-summary ';
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
                
                $buffer .= ' section-summary ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a8152d3d9f2c97a8df7cb314c7a68ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hidden ';
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
                
                $buffer .= ' hidden ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFabacf5fcd35f66c980bc5b597ed4c91(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' current ';
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
                
                $buffer .= ' current ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd936c2a69a972ffdd63f1e0216d6abb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' orphaned ';
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
                
                $buffer .= ' orphaned ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1c4cc002642338f80b53db456660a86(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> core_courseformat/local/content/section/header }} ';
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
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/header')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d0ebc0d24d67a42a3360a7ef71b50a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{currentlink}}} ';
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
                $value = $this->resolveValue($context->find('currentlink'), $context);
                $buffer .= $value;
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5ab0625eae779763c283ec4063bafde3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> core_courseformat/local/content/section/controlmenu }}
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
                
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/controlmenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14c724f5a6859d4cc56d9befdffaeac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show';
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
                
                $buffer .= 'show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ce960cf708aa3a2d85874f50bacd923(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> core_courseformat/local/content/section/availability }}
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
                
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/availability')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCcd0c3fb2a2df6ade916d5dd2d012e50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> core_courseformat/local/content/section/summary }}
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
                
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/summary')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14012f1362a3abe15c46b065b81a918f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> core_courseformat/local/content/section/cmsummary }} ';
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
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/cmsummary')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3042ddd6b3e59b4772ea6cc6d6298388(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{> core_courseformat/local/content/section/cmlist }} ';
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
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/section/cmlist')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section757883bca73ce2c714805f8a995691fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core_courseformat/local/content/addsection}}
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
                
                if ($partial = $this->mustache->loadPartial('core_courseformat/local/content/addsection')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb01b1c61d59718bc2ea11f62da1adc4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#numsections}}
                {{> core_courseformat/local/content/addsection}}
            {{/numsections}}
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
                
                // 'numsections' section
                $value = $context->find('numsections');
                $buffer .= $this->section757883bca73ce2c714805f8a995691fa($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
