<?php

class __Mustache_bbcd39d5601a4ad3f60681fd50ad176f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'iscoursedisplaymultipage' section
        $value = $context->find('iscoursedisplaymultipage');
        $buffer .= $this->sectionE4ff39d16e136a8b6a18b119ef7589b5($context, $indent, $value);
        // 'iscoursedisplaymultipage' inverted section
        $value = $context->find('iscoursedisplaymultipage');
        if (empty($value)) {
            
            // 'sitehome' section
            $value = $context->find('sitehome');
            $buffer .= $this->sectionBaaf5ca3479f2a5f6a47922afcad98d1($context, $indent, $value);
            // 'sitehome' inverted section
            $value = $context->find('sitehome');
            if (empty($value)) {
                
                $buffer .= $indent . '        <div class="d-flex">
';
                $buffer .= $indent . '            <a role="button" data-toggle="collapse"
';
                $buffer .= $indent . '               href="#coursecontentcollapse';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '               id="collapssesection';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '               aria-expanded="';
                // 'contentexpanded' section
                $value = $context->find('contentexpanded');
                $buffer .= $this->section03a2cb78adf693fb240638cbbc7ea15e($context, $indent, $value);
                // 'contentexpanded' inverted section
                $value = $context->find('contentexpanded');
                if (empty($value)) {
                    
                    $buffer .= 'false';
                }
                $buffer .= '"
';
                $buffer .= $indent . '               aria-controls="coursecontentcollapse';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '               class="btn btn-icon mr-1 icons-collapse-expand ';
                // 'contentexpanded' inverted section
                $value = $context->find('contentexpanded');
                if (empty($value)) {
                    
                    $buffer .= 'collapsed';
                }
                $buffer .= '"
';
                $buffer .= $indent . '               aria-label="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <span class="expanded-icon icon-no-margin p-2" data-toggle="tooltip" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0ac795c23146489fad8f951c23f9a92a($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->sectionEce766800de4730c5a948801df414738($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </span>
';
                $buffer .= $indent . '                <span class="collapsed-icon icon-no-margin p-2" data-toggle="tooltip" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8b5765485c94c190bf567731edb08c3a($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section8a8ae941fd79f459323bea8528b0311c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '            <h3 class="sectionid-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-title sectionname course-content-item ';
                // 'visible' inverted section
                $value = $context->find('visible');
                if (empty($value)) {
                    
                    $buffer .= 'dimmed';
                }
                $buffer .= ' flex-fill"
';
                $buffer .= $indent . '                id="coursecontentsection';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-for="section_title" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-number="';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '                data-action="togglecoursecontentsection">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '            </h3>
';
                $buffer .= $indent . '        </div>
';
            }
        }

        return $buffer;
    }

    private function section2446e1efa274c39c0eab1ef564e1f8ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' dimmed_text ';
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
                
                $buffer .= ' dimmed_text ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb5cdb6c71bcb1cb2fc7259c6f13df0c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{url}}}" class="{{#ishidden}} dimmed_text {{/ishidden}}">{{name}}</a>
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
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" class="';
                // 'ishidden' section
                $value = $context->find('ishidden');
                $buffer .= $this->section2446e1efa274c39c0eab1ef564e1f8ed($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4ff39d16e136a8b6a18b119ef7589b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <h3 class="sectionid-{{id}}-title sectionname flex-fill"
        data-for="section_title" data-id="{{id}}" data-number="{{num}}">
        {{#url}}
            <a href="{{{url}}}" class="{{#ishidden}} dimmed_text {{/ishidden}}">{{name}}</a>
        {{/url}}
        {{^url}}
            <span>{{{title}}}</span>
        {{/url}}
    </h3>
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
                
                $buffer .= $indent . '    <h3 class="sectionid-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-title sectionname flex-fill"
';
                $buffer .= $indent . '        data-for="section_title" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-number="';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'url' section
                $value = $context->find('url');
                $buffer .= $this->sectionFb5cdb6c71bcb1cb2fc7259c6f13df0c($context, $indent, $value);
                // 'url' inverted section
                $value = $context->find('url');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <span>';
                    $value = $this->resolveValue($context->find('title'), $context);
                    $buffer .= $value;
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '    </h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF03c98cca9479731974e015f0962f691(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a href="{{{url}}}" class="{{#ishidden}} dimmed_text {{/ishidden}}">{{name}}</a>
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
                
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" class="';
                // 'ishidden' section
                $value = $context->find('ishidden');
                $buffer .= $this->section2446e1efa274c39c0eab1ef564e1f8ed($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBaaf5ca3479f2a5f6a47922afcad98d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h2 class="sectionid-{{id}}-title sectionname flex-fill"
            data-for="section_title" data-id="{{id}}" data-number="{{num}}">
            {{#url}}
                <a href="{{{url}}}" class="{{#ishidden}} dimmed_text {{/ishidden}}">{{name}}</a>
            {{/url}}
            {{^url}}
                <span>{{{title}}}</span>
            {{/url}}
        </h2>
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
                
                $buffer .= $indent . '        <h2 class="sectionid-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '-title sectionname flex-fill"
';
                $buffer .= $indent . '            data-for="section_title" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" data-number="';
                $value = $this->resolveValue($context->find('num'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'url' section
                $value = $context->find('url');
                $buffer .= $this->sectionF03c98cca9479731974e015f0962f691($context, $indent, $value);
                // 'url' inverted section
                $value = $context->find('url');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <span>';
                    $value = $this->resolveValue($context->find('title'), $context);
                    $buffer .= $value;
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '        </h2>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section03a2cb78adf693fb240638cbbc7ea15e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'true';
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
                
                $buffer .= 'true';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ac795c23146489fad8f951c23f9a92a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapse, core ';
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
                
                $buffer .= ' collapse, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEce766800de4730c5a948801df414738(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/expandedchevron, core ';
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
                
                $buffer .= ' t/expandedchevron, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b5765485c94c190bf567731edb08c3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' expand, core ';
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
                
                $buffer .= ' expand, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a8ae941fd79f459323bea8528b0311c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/collapsedchevron, core ';
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
                
                $buffer .= ' t/collapsedchevron, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
