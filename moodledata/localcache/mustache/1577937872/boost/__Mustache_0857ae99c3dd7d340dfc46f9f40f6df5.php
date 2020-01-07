<?php

class __Mustache_0857ae99c3dd7d340dfc46f9f40f6df5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="calendar-multi-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        // 'previousmonth' section
        $value = $context->find('previousmonth');
        $buffer .= $this->sectionE88e0a2150985bbf78b23269b43bd7c6($context, $indent, $value);
        // 'currentmonth' section
        $value = $context->find('currentmonth');
        $buffer .= $this->sectionE88e0a2150985bbf78b23269b43bd7c6($context, $indent, $value);
        // 'nextmonth' section
        $value = $context->find('nextmonth');
        $buffer .= $this->sectionE88e0a2150985bbf78b23269b43bd7c6($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        // 'js' section
        $value = $context->find('js');
        $buffer .= $this->sectionB4744cde93e16edeeecb1e60739a7d6e($context, $indent, $value);

        return $buffer;
    }

    private function sectionE88e0a2150985bbf78b23269b43bd7c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core_calendar/threemonth_month}}
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
                
                if ($partial = $this->mustache->loadPartial('core_calendar/threemonth_month')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4744cde93e16edeeecb1e60739a7d6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'core_calendar/calendar_threemonth\'], function($, CalendarThreeMonth) {
    CalendarThreeMonth.init($("#calendar-multi-{{uniqid}}"));
});
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
                
                $buffer .= $indent . 'require([\'jquery\', \'core_calendar/calendar_threemonth\'], function($, CalendarThreeMonth) {
';
                $buffer .= $indent . '    CalendarThreeMonth.init($("#calendar-multi-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"));
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
