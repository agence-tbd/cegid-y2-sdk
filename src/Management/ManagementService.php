<?php

namespace Y2\Management;

/**
 * Contract of the Web Service for the management of Documents.
 */
class ManagementService extends \SoapClient
{
    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'HelloWorld'                                        => 'Y2\\Management\\HelloWorld',
        'HelloWorldResponse'                                => 'Y2\\Management\\HelloWorldResponse',

        'CreateFrom'                                        => 'Y2\\Management\\CreateFrom',
            'RetailContext'                                     => 'Y2\\Management\\RetailContext',
            'CreateFromRequest'                                 => 'Y2\\Management\\CreateFrom_Request',
                'CreateFromRequestHeader'                                            => 'Y2\\Management\\CreateFrom_Header',
                    'CreateFromRequestHeaderOriginalDocumentIdentifier' => 'Y2\\Management\\CreateFromDocumentIdentifier',
                        'CreateFromRequestHeaderOriginalDocumentIdentifierKey' => 'Y2\\Management\\CreateFromDocumentKey',
                            'CustomerOrderDocumentTypeOriginTransfo' => 'Y2\\Management\\CreateFromCustomerOrderDocumentTypeOriginTransfo',
                        'CreateFromRequestHeaderOriginalDocumentIdentifierReference' => 'Y2\\Management\\CreateFromDocumentReference',
                    'CreateFromRequestHeaderRemainderManagement' => 'Y2\\Management\\CreateFromRemainderManagement',
                    'CustomerOrderDocumentTypeCreat' => 'Y2\\Management\\CreateFromCustomerOrderDocumentTypeCreat',
                    'CreateFromRequestHeaderUserDefinedDateCollection' => 'Y2\\Management\\ArrayOfUserDefinedDate',
                        'CreateFromRequestHeaderUserDefinedDate' => 'Y2\\Management\\UserDefinedDate',
                    'CreateFromRequestHeaderUserDefinedTableCustomerCollection' => 'Y2\\Management\\ArrayOfUserDefinedTableCustomer',
                        'CreateFromRequestHeaderUserDefinedTableCustomer' => 'Y2\\Management\\UserDefinedTableCustomer',
                    'CreateFromRequestHeaderUserDefinedTableCollection' => 'Y2\\Management\\ArrayOfUserDefinedTable',
                        'CreateFromRequestHeaderUserDefinedTable' => 'Y2\\Management\\UserDefinedTable',
                    'CreateFromRequestHeaderUserFieldCollection' => 'Y2\\Management\\ArrayOfUserField',
                        'CreateFromRequestHeaderUserField' => 'Y2\\Management\\UserField',
                            'CreateFromRequestHeaderUserFieldValue' => 'Y2\\Management\\UserFieldValue',
                            'CustomerOrderUserFieldType' => 'Y2\\Management\\UserFieldKind',
                'CreateFromRequestLineCollection'                                 => 'Y2\\Management\\ArrayOfCreateFrom_Line',
                    'CreateFromRequestLine' => 'Y2\\Management\\CreateFrom_Line',
                        'CreateFromRequestLineItemIdentifier' => 'Y2\\Management\\ItemIdentifier',
                'CreateFromRequestPaymentCollection'                              => 'Y2\\Management\\ArrayOfCreateFrom_Payment',
                    'CreateFromRequestPayment' => 'Y2\\Management\\CreateFrom_Payment',
                        'CreateFromRequestPaymentCreditCard' => 'Y2\\Management\\CreditCard',
                        'CreateFromRequestPaymentReceivedPayment' => 'Y2\\Management\\CreateFrom_ReceivedPayment',
        'CreateFromResponse' => 'Y2\\Management\\CreateFromResponse',
            'CreateFromReply' => 'Y2\\Management\\CreateFrom_Reply',
                'CreateFromReplyDocumentCollection' => 'Y2\\Management\\ArrayOfCreateFrom_Document',
                    'CreateFromReplyDocument' => 'Y2\\Management\\CreateFrom_Document',
                        'CreateFromReplyDocumentKey' => 'Y2\\Management\\CreateFromDocumentKey',
                            'CustomerOrderDocumentTypeCreatResult' => 'Y2\\Management\\CreateFromCustomerOrderDocumentTypeCreatResult',
    );

    /**
     * @param       $wsdl
     * @param array $options
     *
     * @throws \SoapFault
     */
    public function __construct($wsdl, array $options = array())
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        $options = array_merge(array(
            'features' => 1,
        ), $options);

        parent::__construct($wsdl, $options);
    }

    /**
     * @param HelloWorld $parameters
     *
     * @return HelloWorldResponse
     */
    public function HelloWorld(HelloWorld $parameters): HelloWorldResponse
    {
        return $this->__soapCall('HelloWorld', array($parameters));
    }

    public function CreateFrom(CreateFrom $parameters)
    {
        return $this->__soapCall('CreateFrom', array($parameters));
    }
}
