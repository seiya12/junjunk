<?php
// This file was auto-generated from sdk-root/src/data/opsworkscm/2016-11-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2016-11-01', 'endpointPrefix' => 'opsworks-cm', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'OpsWorksCM', 'serviceFullName' => 'AWS OpsWorks CM', 'serviceId' => 'OpsWorksCM', 'signatureVersion' => 'v4', 'signingName' => 'opsworks-cm', 'targetPrefix' => 'OpsWorksCM_V2016_11_01', 'uid' => 'opsworkscm-2016-11-01', ], 'operations' => [ 'AssociateNode' => [ 'name' => 'AssociateNode', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AssociateNodeRequest', ], 'output' => [ 'shape' => 'AssociateNodeResponse', ], 'errors' => [ [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'CreateBackup' => [ 'name' => 'CreateBackup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateBackupRequest', ], 'output' => [ 'shape' => 'CreateBackupResponse', ], 'errors' => [ [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'CreateServer' => [ 'name' => 'CreateServer', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateServerRequest', ], 'output' => [ 'shape' => 'CreateServerResponse', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceAlreadyExistsException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DeleteBackup' => [ 'name' => 'DeleteBackup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteBackupRequest', ], 'output' => [ 'shape' => 'DeleteBackupResponse', ], 'errors' => [ [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DeleteServer' => [ 'name' => 'DeleteServer', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteServerRequest', ], 'output' => [ 'shape' => 'DeleteServerResponse', ], 'errors' => [ [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DescribeAccountAttributes' => [ 'name' => 'DescribeAccountAttributes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeAccountAttributesRequest', ], 'output' => [ 'shape' => 'DescribeAccountAttributesResponse', ], ], 'DescribeBackups' => [ 'name' => 'DescribeBackups', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeBackupsRequest', ], 'output' => [ 'shape' => 'DescribeBackupsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'DescribeEvents' => [ 'name' => 'DescribeEvents', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeEventsRequest', ], 'output' => [ 'shape' => 'DescribeEventsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'DescribeNodeAssociationStatus' => [ 'name' => 'DescribeNodeAssociationStatus', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeNodeAssociationStatusRequest', ], 'output' => [ 'shape' => 'DescribeNodeAssociationStatusResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DescribeServers' => [ 'name' => 'DescribeServers', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeServersRequest', ], 'output' => [ 'shape' => 'DescribeServersResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'DisassociateNode' => [ 'name' => 'DisassociateNode', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DisassociateNodeRequest', ], 'output' => [ 'shape' => 'DisassociateNodeResponse', ], 'errors' => [ [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'ExportServerEngineAttribute' => [ 'name' => 'ExportServerEngineAttribute', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ExportServerEngineAttributeRequest', ], 'output' => [ 'shape' => 'ExportServerEngineAttributeResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidStateException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'RestoreServer' => [ 'name' => 'RestoreServer', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RestoreServerRequest', ], 'output' => [ 'shape' => 'RestoreServerResponse', ], 'errors' => [ [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'StartMaintenance' => [ 'name' => 'StartMaintenance', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartMaintenanceRequest', ], 'output' => [ 'shape' => 'StartMaintenanceResponse', ], 'errors' => [ [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidStateException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidStateException', ], ], ], 'UpdateServer' => [ 'name' => 'UpdateServer', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateServerRequest', ], 'output' => [ 'shape' => 'UpdateServerResponse', ], 'errors' => [ [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'UpdateServerEngineAttributes' => [ 'name' => 'UpdateServerEngineAttributes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateServerEngineAttributesRequest', ], 'output' => [ 'shape' => 'UpdateServerEngineAttributesResponse', ], 'errors' => [ [ 'shape' => 'InvalidStateException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], ], 'shapes' => [ 'AWSOpsWorksCMResourceArn' => [ 'type' => 'string', 'pattern' => 'arn:aws.*:opsworks-cm:.*:[0-9]{12}:.*', ], 'AccountAttribute' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Maximum' => [ 'shape' => 'Integer', ], 'Used' => [ 'shape' => 'Integer', ], ], ], 'AccountAttributes' => [ 'type' => 'list', 'member' => [ 'shape' => 'AccountAttribute', ], ], 'AssociateNodeRequest' => [ 'type' => 'structure', 'required' => [ 'ServerName', 'NodeName', 'EngineAttributes', ], 'members' => [ 'ServerName' => [ 'shape' => 'ServerName', ], 'NodeName' => [ 'shape' => 'NodeName', ], 'EngineAttributes' => [ 'shape' => 'EngineAttributes', ], ], ], 'AssociateNodeResponse' => [ 'type' => 'structure', 'members' => [ 'NodeAssociationStatusToken' => [ 'shape' => 'NodeAssociationStatusToken', ], ], ], 'AttributeName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[A-Z][A-Z0-9_]*', ], 'AttributeValue' => [ 'type' => 'string', 'max' => 10000, 'pattern' => '(?s).*', ], 'Backup' => [ 'type' => 'structure', 'members' => [ 'BackupArn' => [ 'shape' => 'String', ], 'BackupId' => [ 'shape' => 'BackupId', ], 'BackupType' => [ 'shape' => 'BackupType', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'Description' => [ 'shape' => 'String', ], 'Engine' => [ 'shape' => 'String', ], 'EngineModel' => [ 'shape' => 'String', ], 'EngineVersion' => [ 'shape' => 'String', ], 'InstanceProfileArn' => [ 'shape' => 'String', ], 'InstanceType' => [ 'shape' => 'String', ], 'KeyPair' => [ 'shape' => 'String', ], 'PreferredBackupWindow' => [ 'shape' => 'TimeWindowDefinition', ], 'PreferredMaintenanceWindow' => [ 'shape' => 'TimeWindowDefinition', ], 'S3DataSize' => [ 'shape' => 'Integer', 'deprecated' => true, ], 'S3DataUrl' => [ 'shape' => 'String', 'deprecated' => true, ], 'S3LogUrl' => [ 'shape' => 'String', ], 'SecurityGroupIds' => [ 'shape' => 'Strings', ], 'ServerName' => [ 'shape' => 'ServerName', ], 'ServiceRoleArn' => [ 'shape' => 'String', ], 'Status' => [ 'shape' => 'BackupStatus', ], 'StatusDescription' => [ 'shape' => 'String', ], 'SubnetIds' => [ 'shape' => 'Strings', ], 'ToolsVersion' => [ 'shape' => 'String', ], 'UserArn' => [ 'shape' => 'String', ], ], ], 'BackupId' => [ 'type' => 'string', 'max' => 79, 'pattern' => '[a-zA-Z][a-zA-Z0-9\\-\\.\\:]*', ], 'BackupRetentionCountDefinition' => [ 'type' => 'integer', 'min' => 1, ], 'BackupStatus' => [ 'type' => 'string', 'enum' => [ 'IN_PROGRESS', 'OK', 'FAILED', 'DELETING', ], ], 'BackupType' => [ 'type' => 'string', 'enum' => [ 'AUTOMATED', 'MANUAL', ], ], 'Backups' => [ 'type' => 'list', 'member' => [ 'shape' => 'Backup', ], ], 'Boolean' => [ 'type' => 'boolean', ], 'CreateBackupRequest' => [ 'type' => 'structure', 'required' => [ 'ServerName', ], 'members' => [ 'ServerName' => [ 'shape' => 'ServerName', ], 'Description' => [ 'shape' => 'String', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'CreateBackupResponse' => [ 'type' => 'structure', 'members' => [ 'Backup' => [ 'shape' => 'Backup', ], ], ], 'CreateServerRequest' => [ 'type' => 'structure', 'required' => [ 'ServerName', 'InstanceProfileArn', 'InstanceType', 'ServiceRoleArn', ], 'members' => [ 'AssociatePublicIpAddress' => [ 'shape' => 'Boolean', ], 'CustomDomain' => [ 'shape' => 'CustomDomain', ], 'CustomCertificate' => [ 'shape' => 'CustomCertificate', ], 'CustomPrivateKey' => [ 'shape' => 'CustomPrivateKey', ], 'DisableAutomatedBackup' => [ 'shape' => 'Boolean', ], 'Engine' => [ 'shape' => 'String', ], 'EngineModel' => [ 'shape' => 'String', ], 'EngineVersion' => [ 'shape' => 'String', ], 'EngineAttributes' => [ 'shape' => 'EngineAttributes', ], 'BackupRetentionCount' => [ 'shape' => 'BackupRetentionCountDefinition', ], 'ServerName' => [ 'shape' => 'ServerName', ], 'InstanceProfileArn' => [ 'shape' => 'InstanceProfileArn', ], 'InstanceType' => [ 'shape' => 'String', ], 'KeyPair' => [ 'shape' => 'KeyPair', ], 'PreferredMaintenanceWindow' => [ 'shape' => 'TimeWindowDefinition', ], 'PreferredBackupWindow' => [ 'shape' => 'TimeWindowDefinition', ], 'SecurityGroupIds' => [ 'shape' => 'Strings', ], 'ServiceRoleArn' => [ 'shape' => 'ServiceRoleArn', ], 'SubnetIds' => [ 'shape' => 'Strings', ], 'Tags' => [ 'shape' => 'TagList', ], 'BackupId' => [ 'shape' => 'BackupId', ], ], ], 'CreateServerResponse' => [ 'type' => 'structure', 'members' => [ 'Server' => [ 'shape' => 'Server', ], ], ], 'CustomCertificate' => [ 'type' => 'string', 'max' => 2097152, 'pattern' => '(?s)\\s*-----BEGIN CERTIFICATE-----.+-----END CERTIFICATE-----\\s*', ], 'CustomDomain' => [ 'type' => 'string', 'max' => 253, 'pattern' => '^(((?!-)[A-Za-z0-9-]{0,62}[A-Za-z0-9])\\.)+((?!-)[A-Za-z0-9-]{1,62}[A-Za-z0-9])$', ], 'CustomPrivateKey' => [ 'type' => 'string', 'max' => 4096, 'pattern' => '(?ms)\\s*^-----BEGIN (?-s:.*)PRIVATE KEY-----$.*?^-----END (?-s:.*)PRIVATE KEY-----$\\s*', 'sensitive' => true, ], 'DeleteBackupRequest' => [ 'type' => 'structure', 'required' => [ 'BackupId', ], 'members' => [ 'BackupId' => [ 'shape' => 'BackupId', ], ], ], 'DeleteBackupResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteServerRequest' => [ 'type' => 'structure', 'required' => [ 'ServerName', ], 'members' => [ 'ServerName' => [ 'shape' => 'ServerName', ], ], ], 'DeleteServerResponse' => [ 'type' => 'structure', 'members' => [], ], 'DescribeAccountAttributesRequest' => [ 'type' => 'structure', 'members' => [], ], 'DescribeAccountAttributesResponse' => [ 'type' => 'structure', 'members' => [ 'Attributes' => [ 'shape' => 'AccountAttributes', ], ], ], 'DescribeBackupsRequest' => [ 'type' => 'structure', 'members' => [ 'BackupId' => [ 'shape' => 'BackupId', ], 'ServerName' => [ 'shape' => 'ServerName', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'DescribeBackupsResponse' => [ 'type' => 'structure', 'members' => [ 'Backups' => [ 'shape' => 'Backups', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'DescribeEventsRequest' => [ 'type' => 'structure', 'required' => [ 'ServerName', ], 'members' => [ 'ServerName' => [ 'shape' => 'ServerName', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'DescribeEventsResponse' => [ 'type' => 'structure', 'members' => [ 'ServerEvents' => [ 'shape' => 'ServerEvents', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'DescribeNodeAssociationStatusRequest' => [ 'type' => 'structure', 'required' => [ 'NodeAssociationStatusToken', 'ServerName', ], 'members' => [ 'NodeAssociationStatusToken' => [ 'shape' => 'NodeAssociationStatusToken', ], 'ServerName' => [ 'shape' => 'ServerName', ], ], ], 'DescribeNodeAssociationStatusResponse' => [ 'type' => 'structure', 'members' => [ 'NodeAssociationStatus' => [ 'shape' => 'NodeAssociationStatus', ], 'EngineAttributes' => [ 'shape' => 'EngineAttributes', ], ], ], 'DescribeServersRequest' => [ 'type' => 'structure', 'members' => [ 'ServerName' => [ 'shape' => 'ServerName', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'DescribeServersResponse' => [ 'type' => 'structure', 'members' => [ 'Servers' => [ 'shape' => 'Servers', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'DisassociateNodeRequest' => [ 'type' => 'structure', 'required' => [ 'ServerName', 'NodeName', ], 'members' => [ 'ServerName' => [ 'shape' => 'ServerName', ], 'NodeName' => [ 'shape' => 'NodeName', ], 'EngineAttributes' => [ 'shape' => 'EngineAttributes', ], ], ], 'DisassociateNodeResponse' => [ 'type' => 'structure', 'members' => [ 'NodeAssociationStatusToken' => [ 'shape' => 'NodeAssociationStatusToken', ], ], ], 'EngineAttribute' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'EngineAttributeName', ], 'Value' => [ 'shape' => 'EngineAttributeValue', ], ], ], 'EngineAttributeName' => [ 'type' => 'string', 'max' => 10000, 'pattern' => '(?s).*', ], 'EngineAttributeValue' => [ 'type' => 'string', 'max' => 10000, 'pattern' => '(?s).*', 'sensitive' => true, ], 'EngineAttributes' => [ 'type' => 'list', 'member' => [ 'shape' => 'EngineAttribute', ], ], 'ExportServerEngineAttributeRequest' => [ 'type' => 'structure', 'required' => [ 'ExportAttributeName', 'ServerName', ], 'members' => [ 'ExportAttributeName' => [ 'shape' => 'String', ], 'ServerName' => [ 'shape' => 'ServerName', ], 'InputAttributes' => [ 'shape' => 'EngineAttributes', ], ], ], 'ExportServerEngineAttributeResponse' => [ 'type' => 'structure', 'members' => [ 'EngineAttribute' => [ 'shape' => 'EngineAttribute', ], 'ServerName' => [ 'shape' => 'ServerName', ], ], ], 'InstanceProfileArn' => [ 'type' => 'string', 'max' => 10000, 'pattern' => 'arn:aws:iam::[0-9]{12}:instance-profile/.*', ], 'Integer' => [ 'type' => 'integer', ], 'InvalidNextTokenException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'InvalidStateException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'KeyPair' => [ 'type' => 'string', 'max' => 10000, 'pattern' => '.*', ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'AWSOpsWorksCMResourceArn', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'MaintenanceStatus' => [ 'type' => 'string', 'enum' => [ 'SUCCESS', 'FAILED', ], ], 'MaxResults' => [ 'type' => 'integer', 'min' => 1, ], 'NextToken' => [ 'type' => 'string', 'max' => 10000, 'pattern' => '(?s).*', ], 'NodeAssociationStatus' => [ 'type' => 'string', 'enum' => [ 'SUCCESS', 'FAILED', 'IN_PROGRESS', ], ], 'NodeAssociationStatusToken' => [ 'type' => 'string', 'max' => 10000, 'pattern' => '(?s).*', ], 'NodeName' => [ 'type' => 'string', 'max' => 10000, 'pattern' => '^[\\-\\p{Alnum}_:.]+$', ], 'ResourceAlreadyExistsException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'RestoreServerRequest' => [ 'type' => 'structure', 'required' => [ 'BackupId', 'ServerName', ], 'members' => [ 'BackupId' => [ 'shape' => 'BackupId', ], 'ServerName' => [ 'shape' => 'ServerName', ], 'InstanceType' => [ 'shape' => 'String', ], 'KeyPair' => [ 'shape' => 'KeyPair', ], ], ], 'RestoreServerResponse' => [ 'type' => 'structure', 'members' => [], ], 'Server' => [ 'type' => 'structure', 'members' => [ 'AssociatePublicIpAddress' => [ 'shape' => 'Boolean', ], 'BackupRetentionCount' => [ 'shape' => 'Integer', ], 'ServerName' => [ 'shape' => 'String', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'CloudFormationStackArn' => [ 'shape' => 'String', ], 'CustomDomain' => [ 'shape' => 'CustomDomain', ], 'DisableAutomatedBackup' => [ 'shape' => 'Boolean', ], 'Endpoint' => [ 'shape' => 'String', ], 'Engine' => [ 'shape' => 'String', ], 'EngineModel' => [ 'shape' => 'String', ], 'EngineAttributes' => [ 'shape' => 'EngineAttributes', ], 'EngineVersion' => [ 'shape' => 'String', ], 'InstanceProfileArn' => [ 'shape' => 'String', ], 'InstanceType' => [ 'shape' => 'String', ], 'KeyPair' => [ 'shape' => 'String', ], 'MaintenanceStatus' => [ 'shape' => 'MaintenanceStatus', ], 'PreferredMaintenanceWindow' => [ 'shape' => 'TimeWindowDefinition', ], 'PreferredBackupWindow' => [ 'shape' => 'TimeWindowDefinition', ], 'SecurityGroupIds' => [ 'shape' => 'Strings', ], 'ServiceRoleArn' => [ 'shape' => 'String', ], 'Status' => [ 'shape' => 'ServerStatus', ], 'StatusReason' => [ 'shape' => 'String', ], 'SubnetIds' => [ 'shape' => 'Strings', ], 'ServerArn' => [ 'shape' => 'String', ], ], ], 'ServerEvent' => [ 'type' => 'structure', 'members' => [ 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'ServerName' => [ 'shape' => 'String', ], 'Message' => [ 'shape' => 'String', ], 'LogUrl' => [ 'shape' => 'String', ], ], ], 'ServerEvents' => [ 'type' => 'list', 'member' => [ 'shape' => 'ServerEvent', ], ], 'ServerName' => [ 'type' => 'string', 'max' => 40, 'min' => 1, 'pattern' => '[a-zA-Z][a-zA-Z0-9\\-]*', ], 'ServerStatus' => [ 'type' => 'string', 'enum' => [ 'BACKING_UP', 'CONNECTION_LOST', 'CREATING', 'DELETING', 'MODIFYING', 'FAILED', 'HEALTHY', 'RUNNING', 'RESTORING', 'SETUP', 'UNDER_MAINTENANCE', 'UNHEALTHY', 'TERMINATED', ], ], 'Servers' => [ 'type' => 'list', 'member' => [ 'shape' => 'Server', ], ], 'ServiceRoleArn' => [ 'type' => 'string', 'max' => 10000, 'pattern' => 'arn:aws:iam::[0-9]{12}:role/.*', ], 'StartMaintenanceRequest' => [ 'type' => 'structure', 'required' => [ 'ServerName', ], 'members' => [ 'ServerName' => [ 'shape' => 'ServerName', ], 'EngineAttributes' => [ 'shape' => 'EngineAttributes', ], ], ], 'StartMaintenanceResponse' => [ 'type' => 'structure', 'members' => [ 'Server' => [ 'shape' => 'Server', ], ], ], 'String' => [ 'type' => 'string', 'max' => 10000, 'pattern' => '(?s).*', ], 'Strings' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', 'Value', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:\\/=+\\\\\\-@]*)$', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 200, 'min' => 0, ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 200, 'min' => 0, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'Tags', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'AWSOpsWorksCMResourceArn', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:\\/=+\\\\\\-@]*)$', ], 'TimeWindowDefinition' => [ 'type' => 'string', 'max' => 10000, 'pattern' => '^((Mon|Tue|Wed|Thu|Fri|Sat|Sun):)?([0-1][0-9]|2[0-3]):[0-5][0-9]$', ], 'Timestamp' => [ 'type' => 'timestamp', ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'TagKeys', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'AWSOpsWorksCMResourceArn', ], 'TagKeys' => [ 'shape' => 'TagKeyList', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateServerEngineAttributesRequest' => [ 'type' => 'structure', 'required' => [ 'ServerName', 'AttributeName', ], 'members' => [ 'ServerName' => [ 'shape' => 'ServerName', ], 'AttributeName' => [ 'shape' => 'AttributeName', ], 'AttributeValue' => [ 'shape' => 'AttributeValue', ], ], ], 'UpdateServerEngineAttributesResponse' => [ 'type' => 'structure', 'members' => [ 'Server' => [ 'shape' => 'Server', ], ], ], 'UpdateServerRequest' => [ 'type' => 'structure', 'required' => [ 'ServerName', ], 'members' => [ 'DisableAutomatedBackup' => [ 'shape' => 'Boolean', ], 'BackupRetentionCount' => [ 'shape' => 'Integer', ], 'ServerName' => [ 'shape' => 'ServerName', ], 'PreferredMaintenanceWindow' => [ 'shape' => 'TimeWindowDefinition', ], 'PreferredBackupWindow' => [ 'shape' => 'TimeWindowDefinition', ], ], ], 'UpdateServerResponse' => [ 'type' => 'structure', 'members' => [ 'Server' => [ 'shape' => 'Server', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], ],];
