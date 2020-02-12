<?php

class __Mustache_7c3457c054786d5214cfc45dba1b82fa extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<tr class="preference-row" data-region="preference-row" data-preference-key="';
        $value = $this->resolveValue($context->find('preferencekey'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <td class="preference-name">';
        $value = $this->resolveValue($context->find('displayname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</td>
';
        // 'processors' section
        $value = $context->find('processors');
        $buffer .= $this->section4ea7e9a7c7ad1af13e8bff865fd361e5($context, $indent, $value);
        $buffer .= $indent . '</tr>
';

        return $buffer;
    }

    private function section250b1aed71b494f11eb4d8c66ccfb175(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="dimmed_text">{{lockedmessage}}</div>
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
                
                $buffer .= $indent . '                <div class="dimmed_text">';
                $value = $this->resolveValue($context->find('lockedmessage'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a6da55b13322b091620c166baf3e195(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' disabled, question ';
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
                
                $buffer .= ' disabled, question ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51d7c9c652ced0161cb587bacd669266(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked';
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
                
                $buffer .= 'checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC87198b06c7ce18b3aeed72afb34afb9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled';
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
                
                $buffer .= 'disabled';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b4911431829ec3324d764f9bf3e8837(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' on, message ';
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
                
                $buffer .= ' on, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA151fe0e04e0533589c2ecb576fcd141(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' off, message ';
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
                
                $buffer .= ' off, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c306b27ee52a76c2b68c6ce32afe7c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{< core/hover_tooltip }}
                                        {{$anchor}}
                                            <label class="preference-state"
                                                title="{{displayname}}"
                                                data-state="{{name}}">

                                                <span class="accesshide">{{displayname}}</span>
                                                <input type="checkbox"
                                                    tabindex="-1"
                                                    class="accesshide"
                                                    {{#checked}}checked{{/checked}}
                                                    {{#disableall}}disabled{{/disableall}} />
                                                <div class="preference-state-status-container" tabindex="0">
                                                    <span class="on-text">{{#str}} on, message {{/str}}</span>
                                                    <span class="off-text">{{#str}} off, message {{/str}}</span>
                                                    {{> core/loading }}
                                                </div>
                                            </label>
                                        {{/anchor}}
                                        {{$tooltip}}{{displayname}}{{/tooltip}}
                                    {{/ core/hover_tooltip }}
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
                
                $buffer .= $indent . '                                    ';
                if ($parent = $this->mustache->loadPartial('core/hover_tooltip')) {
                    $context->pushBlockContext(array(
                        'anchor' => array($this, 'block9025e384f966c383d19c0a45fca4ce48'),
                        'tooltip' => array($this, 'blockB331cd3ea4cca41d8fd61c5bb4eb6864'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ea7e9a7c7ad1af13e8bff865fd361e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <td {{^userconfigured}}class="disabled"{{/userconfigured}} data-processor-name="{{name}}">
            {{#locked}}
                <div class="dimmed_text">{{lockedmessage}}</div>
            {{/locked}}
            {{^locked}}
                <div class="disabled-message">{{#str}} disabled, question {{/str}}</div>
                <form>
                    <div class="container-fluid">
                        <div class="row-fluid">
                            <div class="col-xs-6">
                                {{#loggedin}}
                                    {{< core/hover_tooltip }}
                                        {{$anchor}}
                                            <label class="preference-state"
                                                title="{{displayname}}"
                                                data-state="{{name}}">

                                                <span class="accesshide">{{displayname}}</span>
                                                <input type="checkbox"
                                                    tabindex="-1"
                                                    class="accesshide"
                                                    {{#checked}}checked{{/checked}}
                                                    {{#disableall}}disabled{{/disableall}} />
                                                <div class="preference-state-status-container" tabindex="0">
                                                    <span class="on-text">{{#str}} on, message {{/str}}</span>
                                                    <span class="off-text">{{#str}} off, message {{/str}}</span>
                                                    {{> core/loading }}
                                                </div>
                                            </label>
                                        {{/anchor}}
                                        {{$tooltip}}{{displayname}}{{/tooltip}}
                                    {{/ core/hover_tooltip }}
                                {{/loggedin}}
                            </div>
                            <div class="col-xs-6">
                                {{#loggedoff}}
                                    {{< core/hover_tooltip }}
                                        {{$anchor}}
                                            <label class="preference-state"
                                                title="{{displayname}}"
                                                data-state="{{name}}">

                                                <span class="accesshide">{{displayname}}</span>
                                                <input type="checkbox"
                                                    tabindex="-1"
                                                    class="accesshide"
                                                    {{#checked}}checked{{/checked}}
                                                    {{#disableall}}disabled{{/disableall}} />
                                                <div class="preference-state-status-container" tabindex="0">
                                                    <span class="on-text">{{#str}} on, message {{/str}}</span>
                                                    <span class="off-text">{{#str}} off, message {{/str}}</span>
                                                    {{> core/loading }}
                                                </div>
                                            </label>
                                        {{/anchor}}
                                        {{$tooltip}}{{displayname}}{{/tooltip}}
                                    {{/ core/hover_tooltip }}
                                {{/loggedoff}}
                            </div>
                        </div>
                    </div>
                </form>
            {{/locked}}
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
                
                $buffer .= $indent . '    <td ';
                // 'userconfigured' inverted section
                $value = $context->find('userconfigured');
                if (empty($value)) {
                    
                    $buffer .= 'class="disabled"';
                }
                $buffer .= ' data-processor-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                // 'locked' section
                $value = $context->find('locked');
                $buffer .= $this->section250b1aed71b494f11eb4d8c66ccfb175($context, $indent, $value);
                // 'locked' inverted section
                $value = $context->find('locked');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <div class="disabled-message">';
                    // 'str' section
                    $value = $context->find('str');
                    $buffer .= $this->section4a6da55b13322b091620c166baf3e195($context, $indent, $value);
                    $buffer .= '</div>
';
                    $buffer .= $indent . '                <form>
';
                    $buffer .= $indent . '                    <div class="container-fluid">
';
                    $buffer .= $indent . '                        <div class="row-fluid">
';
                    $buffer .= $indent . '                            <div class="col-xs-6">
';
                    // 'loggedin' section
                    $value = $context->find('loggedin');
                    $buffer .= $this->section4c306b27ee52a76c2b68c6ce32afe7c8($context, $indent, $value);
                    $buffer .= '                            </div>
';
                    $buffer .= $indent . '                            <div class="col-xs-6">
';
                    // 'loggedoff' section
                    $value = $context->find('loggedoff');
                    $buffer .= $this->section4c306b27ee52a76c2b68c6ce32afe7c8($context, $indent, $value);
                    $buffer .= $indent . '                            </div>
';
                    $buffer .= $indent . '                        </div>
';
                    $buffer .= $indent . '                    </div>
';
                    $buffer .= $indent . '                </form>
';
                }
                $buffer .= $indent . '        </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block9025e384f966c383d19c0a45fca4ce48($context)
    {
        $indent = $buffer = '';
        $buffer .= '                                            <label class="preference-state"
';
        $buffer .= $indent . '                                                title="';
        $value = $this->resolveValue($context->find('displayname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '"
';
        $buffer .= $indent . '                                                data-state="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                                <span class="accesshide">';
        $value = $this->resolveValue($context->find('displayname'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                                                <input type="checkbox"
';
        $buffer .= $indent . '                                                    tabindex="-1"
';
        $buffer .= $indent . '                                                    class="accesshide"
';
        $buffer .= $indent . '                                                    ';
        // 'checked' section
        $value = $context->find('checked');
        $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                                                    ';
        // 'disableall' section
        $value = $context->find('disableall');
        $buffer .= $this->sectionC87198b06c7ce18b3aeed72afb34afb9($context, $indent, $value);
        $buffer .= ' />
';
        $buffer .= $indent . '                                                <div class="preference-state-status-container" tabindex="0">
';
        $buffer .= $indent . '                                                    <span class="on-text">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section1b4911431829ec3324d764f9bf3e8837($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                                                    <span class="off-text">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA151fe0e04e0533589c2ecb576fcd141($context, $indent, $value);
        $buffer .= '</span>
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '                                                    ');
        }
        $buffer .= $indent . '                                                </div>
';
        $buffer .= $indent . '                                            </label>
';
    
        return $buffer;
    }

    public function blockB331cd3ea4cca41d8fd61c5bb4eb6864($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('displayname'), $context);
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
    
        return $buffer;
    }
}
