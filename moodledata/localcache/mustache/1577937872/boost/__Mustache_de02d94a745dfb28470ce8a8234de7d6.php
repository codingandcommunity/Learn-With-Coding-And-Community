<?php

class __Mustache_de02d94a745dfb28470ce8a8234de7d6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<tr>
';
        $buffer .= $indent . '    <th><h4>';
        $value = $this->resolveValue($context->find('displayname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h4></th>
';
        // 'processors' section
        $value = $context->find('processors');
        $buffer .= $this->section56cac3eca77dbd754394d47688d58b9f($context, $indent, $value);
        $buffer .= $indent . '</tr>
';
        // 'notifications' section
        $value = $context->find('notifications');
        $buffer .= $this->section5363d3d1a3cd394c207ca9285d60d4a7($context, $indent, $value);

        return $buffer;
    }

    private function sectionEb228a6dbdc62698752b2a1176c1133d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loggedin, message ';
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
                
                $buffer .= ' loggedin, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb8e8ddc9ca3702110812af7d06781d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{.}}}';
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
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d1857a05916b17c471fc873f965b0c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loggedoff, message ';
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
                
                $buffer .= ' loggedoff, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56cac3eca77dbd754394d47688d58b9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <td class="align-bottom">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="col-xs-6">
                        {{#str}} loggedin, message {{/str}}
                        {{#onlinehelphtml}}{{{.}}}{{/onlinehelphtml}}
                    </div>
                    <div class="col-xs-6">
                        {{#str}} loggedoff, message {{/str}}
                        {{#offlinehelphtml}}{{{.}}}{{/offlinehelphtml}}
                    </div>
                </div>
            </div>
        </td>
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
                
                $buffer .= $indent . '        <td class="align-bottom">
';
                $buffer .= $indent . '            <div class="container-fluid">
';
                $buffer .= $indent . '                <div class="row-fluid">
';
                $buffer .= $indent . '                    <div class="col-xs-6">
';
                $buffer .= $indent . '                        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEb228a6dbdc62698752b2a1176c1133d($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                // 'onlinehelphtml' section
                $value = $context->find('onlinehelphtml');
                $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="col-xs-6">
';
                $buffer .= $indent . '                        ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section6d1857a05916b17c471fc873f965b0c3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                // 'offlinehelphtml' section
                $value = $context->find('offlinehelphtml');
                $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5363d3d1a3cd394c207ca9285d60d4a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> message/notification_preferences_component_notification }}
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
                
                if ($partial = $this->mustache->loadPartial('message/notification_preferences_component_notification')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
