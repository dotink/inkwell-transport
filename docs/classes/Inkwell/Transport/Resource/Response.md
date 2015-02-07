# Response
## Basic implementation for the response interface

_Copyright (c) 2015, Matthew J. Sahagian_.
_Please reference the LICENSE.md file at the root of this distribution_

### Extends

[`Transport\Message`](../Message.md)

#### Namespace

`Inkwell\Transport\Resource`

#### Imports

<table>

	<tr>
		<th>Alias</th>
		<th>Namespace / Class</th>
	</tr>
	
	<tr>
		<td>Transport</td>
		<td>Inkwell\Transport</td>
	</tr>
	
</table>

#### Authors

<table>
	<thead>
		<th>Name</th>
		<th>Handle</th>
		<th>Email</th>
	</thead>
	<tbody>
	
		<tr>
			<td>
				Matthew J. Sahagian
			</td>
			<td>
				mjs
			</td>
			<td>
				msahagian@dotink.org
			</td>
		</tr>
	
	</tbody>
</table>

## Properties

### Instance Properties
#### <span style="color:#6a6e3d;">$request</span>

The request object to which this is a response



### Inherited Properties

[`Transport\Message::$data`](../Message.md#data) 

## Methods

### Instance Methods
<hr />

#### <span style="color:#3e6a6e;">getRequest()</span>

Get the request object to which this is a response

###### Returns

<dl>
	
		<dt>
			Transport\RequestInterface
		</dt>
		<dd>
			The request object to which this is a response
		</dd>
	
</dl>


<hr />

#### <span style="color:#3e6a6e;">setRequest()</span>

Set the request object to which this is a response

###### Parameters

<table>
	<thead>
		<th>Name</th>
		<th>Type(s)</th>
		<th>Description</th>
	</thead>
	<tbody>
			
		<tr>
			<td>
				$request
			</td>
			<td>
									<a href="../../../../interfaces/Inkwell/Transport/RequestInterface.md">Transport\RequestInterface</a>
				
			</td>
			<td>
				The request object to which this is a response
			</td>
		</tr>
			
	</tbody>
</table>

###### Returns

<dl>
	
		<dt>
			Response
		</dt>
		<dd>
			The called instance for method chaining
		</dd>
	
</dl>




### Inherited Methods

[`Transport\Message::get()`](../Message.md#get) [`Transport\Message::set()`](../Message.md#set) 



