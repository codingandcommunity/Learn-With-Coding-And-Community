<?php

class __Mustache_21c53f5b393002fba9fe9e7d8add2e70 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div data-period="month" class="calendarwrapper"';
        $buffer .= ' data-previous-year="';
        $value = $this->resolveValue($context->findDot('previousperiod.year'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-previous-month="';
        $value = $this->resolveValue($context->findDot('previousperiod.mon'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        $buffer .= ' data-next-year="';
        $value = $this->resolveValue($context->findDot('nextperiod.year'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-next-month="';
        $value = $this->resolveValue($context->findDot('nextperiod.mon'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" ';
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core_calendar/calendar_mini')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
