<?php
/**
 * File containing the eZContentObjectRegression class
 *
 * @copyright Copyright (C) 1999-2011 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU GPLv2
 * @package tests
 * @backupGlobals disabled
 */

class ezpContentRegression extends ezpDatabaseTestCase
{
    /**
     * @group issue18073
     * @link http://issues.ez.no/18073
     */
    public function testUnauthorizedContentByNodeId()
    {
        $this->setExpectedException( 'ezpContentAccessDeniedException' );
        // Let's take content node #5 / object #4 (users) as unauthorized content for anonymous user
        $unauthorizedNodeID = 5;
        $content = ezpContent::fromNodeId( $unauthorizedNodeID );
    }

    /**
     * @group issue18073
     * @link http://issues.ez.no/18073
     */
    public function testUnauthorizedContentByNode()
    {
        $this->setExpectedException( 'ezpContentAccessDeniedException' );
        // Let's take content node #5 / object #4 (users) as unauthorized content for anonymous user
        $unauthorizedNodeID = 5;
        $content = ezpContent::fromNode( eZContentObjectTreeNode::fetch( $unauthorizedNodeID ) );
    }

    /**
     * @group issue18073
     * @link http://issues.ez.no/18073
     */
    public function testUnauthorizedContentByObjectId()
    {
        $this->setExpectedException( 'ezpContentAccessDeniedException' );
        // Let's take content node #5 / object #4 (users) as unauthorized content for anonymous user
        $unauthorizedObjectID = 4;
        $content = ezpContent::fromObjectId( $unauthorizedObjectID );
    }

    /**
     * @group issue18073
     * @link http://issues.ez.no/18073
     */
    public function testUnauthorizedContentByObject()
    {
        $this->setExpectedException( 'ezpContentAccessDeniedException' );
        // Let's take content node #5 / object #4 (users) as unauthorized content for anonymous user
        $unauthorizedObjectID = 4;
        $content = ezpContent::fromObject( eZContentObject::fetch( $unauthorizedObjectID ) );
    }
}
?>