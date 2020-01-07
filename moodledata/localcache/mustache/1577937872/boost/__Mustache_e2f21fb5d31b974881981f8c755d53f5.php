<?php

class __Mustache_e2f21fb5d31b974881981f8c755d53f5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<a href="#" data-action="filter-event-type" data-eventtype="';
        $value = $this->resolveValue($context->find('eventtype'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-eventtype-hidden="';
        $value = $this->resolveValue($context->find('hidden'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'hidden' inverted section
        $value = $context->find('hidden');
        if (empty($value)) {
            
            $buffer .= $indent . '        <span class="calendar_event_';
            $value = $this->resolveValue($context->find('eventtype'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '">
';
            $buffer .= $indent . '            ';
            // 'pix' section
            $value = $context->find('pix');
            $buffer .= $this->section3ce74d98901b789d3d1a5bcdd76ed037($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        </span>
';
            if ($partial = $this->mustache->loadPartial('core_calendar/event_icon')) {
                $buffer .= $partial->renderInternal($context, $indent . '        ');
            }
            $buffer .= $indent . '        <span class="eventname">';
            // 'str' section
            $value = $context->find('str');
            $buffer .= $this->sectionA1af10f8d9e5921331c0cfd62627b5a7($context, $indent, $value);
            $buffer .= '</span>
';
        }
        // 'hidden' section
        $value = $context->find('hidden');
        $buffer .= $this->section1b730e0eab4948f6ea893f3383734d1b($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</a>
';

        return $buffer;
    }

    private function sectionA1af10f8d9e5921331c0cfd62627b5a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hideeventtype, calendar, {{name}}';
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
                
                $buffer .= 'hideeventtype, calendar, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ce74d98901b789d3d1a5bcdd76ed037(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/hide, core, {{#str}}hideeventtype, calendar, {{name}}{{/str}}';
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
                
                $buffer .= 'i/hide, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA1af10f8d9e5921331c0cfd62627b5a7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0cdd975a5dc5ad631b91b19a2e829318(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showeventtype, calendar, {{name}}';
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
                
                $buffer .= 'showeventtype, calendar, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bdcac34012040f5d9dbe02c12254eac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/show, core, {{#str}}showeventtype, calendar, {{name}}{{/str}}';
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
                
                $buffer .= 'i/show, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0cdd975a5dc5ad631b91b19a2e829318($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b730e0eab4948f6ea893f3383734d1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="calendar_event_{{eventtype}}">
            {{#pix}}i/show, core, {{#str}}showeventtype, calendar, {{name}}{{/str}}{{/pix}}
        </span>
        {{> core_calendar/event_icon}}
        <span class="eventname">{{#str}}showeventtype, calendar, {{name}}{{/str}}</span>
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
                
                $buffer .= $indent . '        <span class="calendar_event_';
                $value = $this->resolveValue($context->find('eventtype'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">
';
                $buffer .= $indent . '            ';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section2bdcac34012040f5d9dbe02c12254eac($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                if ($partial = $this->mustache->loadPartial('core_calendar/event_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '        <span class="eventname">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0cdd975a5dc5ad631b91b19a2e829318($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
