<?php

class __Mustache_1c1f0a2c3831e12375cc00bccf9a7e2c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="searchbar input-group mb-1 mr-1 p-0 col-lg-3 col-md-6 col-sm-8 col-12" role="search">
';
        $buffer .= $indent . '    <label for="searchinput">
';
        $buffer .= $indent . '        <span class="sr-only">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section8c5f3f5fbb99a469ab1d8f6898dacaea($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '    </label>
';
        $buffer .= $indent . '    <input type="text"
';
        $buffer .= $indent . '           data-region="search-input"
';
        $buffer .= $indent . '           id="searchinput"
';
        $buffer .= $indent . '           class="form-control searchinput border-right-0 h-100 px-3 py-2"
';
        $buffer .= $indent . '           placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9dbf37a0f544ff636ac78cdadec0a0c6($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '           name="search"
';
        $buffer .= $indent . '           autocomplete="off"
';
        $buffer .= $indent . '    >
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
        $buffer .= $indent . '        <div class="clear input-group-text d-none">
';
        $buffer .= $indent . '            <button class="btn p-0" data-region="clear-icon">
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
        $buffer .= $this->section12b0e385110ea75f862137121a492a56($context, $indent, $value);
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

    private function section8c5f3f5fbb99a469ab1d8f6898dacaea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' searchcourses, block_myoverview ';
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
                
                $buffer .= ' searchcourses, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9dbf37a0f544ff636ac78cdadec0a0c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' search, core ';
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
                
                $buffer .= ' search, core ';
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

    private function section12b0e385110ea75f862137121a492a56(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' clearsearch, block_myoverview ';
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
                
                $buffer .= ' clearsearch, block_myoverview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
