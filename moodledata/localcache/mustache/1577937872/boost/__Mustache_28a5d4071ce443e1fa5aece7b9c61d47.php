<?php

class __Mustache_28a5d4071ce443e1fa5aece7b9c61d47 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="calendarwrapper" data-view="upcoming" data-context-id="';
        $value = $this->resolveValue($context->find('defaulteventcontext'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        if ($partial = $this->mustache->loadPartial('core/overlay_loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '        <h2 class="current text-center">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section5eb7b961da1cd57653ac9ecc003f0655($context, $indent, $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '    ';
        if ($parent = $this->mustache->loadPartial('core_calendar/event_list')) {
            $context->pushBlockContext(array(
                'noeventsmessage' => array($this, 'block77af240e1acd2d40c502f4650d477b51'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section5eb7b961da1cd57653ac9ecc003f0655(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'upcomingevents, core_calendar';
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
                
                $buffer .= 'upcomingevents, core_calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE770b967dd668c9ec6b4b1c5b11bc613(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noupcomingevents, core_calendar ';
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
                
                $buffer .= ' noupcomingevents, core_calendar ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block77af240e1acd2d40c502f4650d477b51($context)
    {
        $indent = $buffer = '';
        $buffer .= '            ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE770b967dd668c9ec6b4b1c5b11bc613($context, $indent, $value);
        $buffer .= '
';
    
        return $buffer;
    }
}
