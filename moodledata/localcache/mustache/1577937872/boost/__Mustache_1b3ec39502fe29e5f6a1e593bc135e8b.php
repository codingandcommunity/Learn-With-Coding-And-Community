<?php

class __Mustache_1b3ec39502fe29e5f6a1e593bc135e8b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<th ';
        // 'userconfigured' inverted section
        $value = $context->find('userconfigured');
        if (empty($value)) {
            
            $buffer .= 'class="unconfigured"';
        }
        $buffer .= ' data-processor-name="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'hassettings' section
        $value = $context->find('hassettings');
        $buffer .= $this->sectionF030a62f908b603178bea8017f1f3799($context, $indent, $value);
        // 'hassettings' inverted section
        $value = $context->find('hassettings');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            $value = $this->resolveValue($context->find('displayname'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '</th>
';

        return $buffer;
    }

    private function sectionA7af643d68d976d01042633b22c317a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' requiresconfiguration, message ';
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
                
                $buffer .= ' requiresconfiguration, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC25a8d299431397ea6a4707503cb8548(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/risk_xss, core ';
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
                
                $buffer .= ' i/risk_xss, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section89916af0ec37e85a42c79ff5d5d44517(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/settings ';
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
                
                $buffer .= ' i/settings ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF030a62f908b603178bea8017f1f3799(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="#"
            data-processor-setting
            data-user-id="{{userid}}"
            data-context-id="{{contextid}}"
            data-name="{{name}}"
            role="button">

            {{< core/hover_tooltip }}
                {{$anchor}}
                    <span class="config-warning" title="{{#str}} requiresconfiguration, message {{/str}}">
                        {{#pix}} i/risk_xss, core {{/pix}}
                    </span>
                {{/anchor}}
                {{$tooltip}}{{#str}} requiresconfiguration, message {{/str}}{{/tooltip}}
            {{/ core/hover_tooltip }}
            {{displayname}} {{#pix}} i/settings {{/pix}}
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
                
                $buffer .= $indent . '        <a href="#"
';
                $buffer .= $indent . '            data-processor-setting
';
                $buffer .= $indent . '            data-user-id="';
                $value = $this->resolveValue($context->find('userid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '            data-context-id="';
                $value = $this->resolveValue($context->find('contextid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '            data-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"
';
                $buffer .= $indent . '            role="button">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            ';
                if ($parent = $this->mustache->loadPartial('core/hover_tooltip')) {
                    $context->pushBlockContext(array(
                        'anchor' => array($this, 'block8b8c20a8f93314dac395cd74f3add359'),
                        'tooltip' => array($this, 'blockE931114d3e97947b74ee2ae60ea5f20b'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section89916af0ec37e85a42c79ff5d5d44517($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block8b8c20a8f93314dac395cd74f3add359($context)
    {
        $indent = $buffer = '';
        $buffer .= '                    <span class="config-warning" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA7af643d68d976d01042633b22c317a2($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionC25a8d299431397ea6a4707503cb8548($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </span>
';
    
        return $buffer;
    }

    public function blockE931114d3e97947b74ee2ae60ea5f20b($context)
    {
        $indent = $buffer = '';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA7af643d68d976d01042633b22c317a2($context, $indent, $value);
    
        return $buffer;
    }
}
