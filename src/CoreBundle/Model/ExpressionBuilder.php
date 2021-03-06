<?php
/**
* @copyright Copyright (c) 2008 – 2017 www.08cms.com
* @author 08cms项目开发团队
* @package 08cms
* create date 2017年4月6日
*/
namespace CoreBundle\Model;

use CoreBundle\Model\Expr\Value;
use CoreBundle\Model\Expr\Comparison;
use CoreBundle\Model\Expr\CompositeExpression;

/**
 * Builder for Expressions in the {@link Selectable} interface.
 *
 * Important Notice for interoperable code: You have to use scalar
 * values only for comparisons, otherwise the behavior of the comparison
 * may be different between implementations (Array vs ORM vs ODM).
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @since  2.3
 */
class ExpressionBuilder
{
    /**
     * @param mixed $x
     *
     * @return CompositeExpression
     */
    public function andX($x = null)
    {
        return new CompositeExpression(CompositeExpression::TYPE_AND, func_get_args());
    }

    /**
     * @param mixed $x
     *
     * @return CompositeExpression
     */
    public function orX($x = null)
    {
        return new CompositeExpression(CompositeExpression::TYPE_OR, func_get_args());
    }

    /**
     * @param string $field
     * @param mixed  $value
     *
     * @return Comparison
     */
    public function eq($field, $value)
    {
        return new Comparison($field, Comparison::EQ, new Value($value));
    }

    /**
     * @param string $field
     * @param mixed  $value
     *
     * @return Comparison
     */
    public function gt($field, $value)
    {
        return new Comparison($field, Comparison::GT, new Value($value));
    }

    /**
     * @param string $field
     * @param mixed  $value
     *
     * @return Comparison
     */
    public function lt($field, $value)
    {
        return new Comparison($field, Comparison::LT, new Value($value));
    }

    /**
     * @param string $field
     * @param mixed  $value
     *
     * @return Comparison
     */
    public function gte($field, $value)
    {
        return new Comparison($field, Comparison::GTE, new Value($value));
    }

    /**
     * @param string $field
     * @param mixed  $value
     *
     * @return Comparison
     */
    public function lte($field, $value)
    {
        return new Comparison($field, Comparison::LTE, new Value($value));
    }

    /**
     * @param string $field
     * @param mixed  $value
     *
     * @return Comparison
     */
    public function neq($field, $value)
    {
        return new Comparison($field, Comparison::NEQ, new Value($value));
    }

    /**
     * @param string $field
     *
     * @return Comparison
     */
    public function isNull($field)
    {
        return new Comparison($field, Comparison::EQ, new Value(null));
    }

    /**
     * @param string $field
     * @param mixed  $values
     *
     * @return Comparison
     */
    public function in($field, array $values)
    {
        return new Comparison($field, Comparison::IN, new Value($values));
    }

    /**
     * @param string $field
     * @param mixed  $values
     *
     * @return Comparison
     */
    public function notIn($field, array $values)
    {
        return new Comparison($field, Comparison::NIN, new Value($values));
    }

    /**
     * @param string $field
     * @param mixed  $value
     *
     * @return Comparison
     */
    public function contains($field, $value)
    {
        return new Comparison($field, Comparison::CONTAINS, new Value($value));
    }

    /**
     * @param string $field
     * @param mixed  $value
     *
     * @return Comparison
     */
    public function memberOf ($field, $value)
    {
        return new Comparison($field, Comparison::MEMBER_OF, new Value($value));
    }

    /**
     * @param string $field
     * @param mixed  $value
     *
     * @return Comparison
     */
    public function startsWith($field, $value)
    {
        return new Comparison($field, Comparison::STARTS_WITH, new Value($value));
    }

    /**
     * @param string $field
     * @param mixed  $value
     *
     * @return Comparison
     */
    public function endsWith($field, $value)
    {
        return new Comparison($field, Comparison::ENDS_WITH, new Value($value));
    }
    
    /**
     * @param string $field
     * @param mixed  $value
     *
     * @return Comparison
     */
    public function find($field, $value)
    {
        return new Comparison($field, Comparison::FIND_IN_SET, new Value($value));
    }
}