<?php

class __Mustache_b3970c0f2411bb6ac27b087668e3aca6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="searchbar input-group mb-3" role=\'search\'>
';
        $buffer .= $indent . '    <label for=\'timelinesearchinput\'>
';
        $buffer .= $indent . '        <span class=\'sr-only\'>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section3a62eec0c00cc98666f35868a656b9cb($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </label>
';
        $buffer .= $indent . '    <input type="text"
';
        $buffer .= $indent . '           data-region="search-input"
';
        $buffer .= $indent . '           id="timelinesearchinput"
';
        $buffer .= $indent . '           class="form-control"
';
        $buffer .= $indent . '           placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section3a62eec0c00cc98666f35868a656b9cb($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '           name="search"
';
        $buffer .= $indent . '           autocomplete="off">
';
        $buffer .= $indent . '    <div class="input-group-append">
';
        $buffer .= $indent . '        <div data-region="search-icon" class="input-group-text">
';
        $buffer .= $indent . '            ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section31a49b2ab335cdb4725ddb42ed8de96c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="clear input-group d-none">
';
        $buffer .= $indent . '            <button class="btn btn-outline-secondary" type="button" data-region="clear-icon">
';
        $buffer .= $indent . '                <span class="d-flex" aria-hidden="true">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section01a1cb688132d57fc41f0070a1ef998d($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section01e95cc343d129f833fca0098354615e($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section3a62eec0c00cc98666f35868a656b9cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' searchevents, block_timeline ';
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
                
                $buffer .= ' searchevents, block_timeline ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31a49b2ab335cdb4725ddb42ed8de96c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' a/search, core ';
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
                
                $buffer .= ' a/search, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01a1cb688132d57fc41f0070a1ef998d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' e/cancel, core ';
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
                
                $buffer .= ' e/cancel, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01e95cc343d129f833fca0098354615e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' clearsearch, block_timeline ';
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
                
                $buffer .= ' clearsearch, block_timeline ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
