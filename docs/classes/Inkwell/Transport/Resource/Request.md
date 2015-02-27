# Request
## Basic implementation for the request interface

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
		<th>Namespace / Target</th>
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
#### <span style="color:#6a6e3d;">$target</span>

The target for the request



### Inherited Properties

[`Transport\Message::$data`](../Message.md#data) 

## Methods

### Instance Methods
<hr />

#### <span style="color:#3e6a6e;">getTarget()</span>

Get the target for the request

###### Returns

<dl>
	
		<dt>
			mixed
		</dt>
		<dd>
			A string or object (with `__toString`) representing the target
		</dd>
	
</dl>


<hr />

#### <span style="color:#3e6a6e;">setTarget()</span>

Set the target for the request

###### Parameters

<table>
	<thead>
		<th>Name</th>
		<th>Type(s)</th>
		<th>Description</th>
	</thead>
	<tbody>
			
		<tr>
			<td rowspan="3">
				$target
			</td>
			<td>
									<a href="http://www.php.net/language.types.string.php">string</a>
				
			</td>
			<td rowspan="3">
				A string or object (with `__toString`) representing the target
			</td>
		</tr>
			
		<tr>
			<td>
									Object				
			</td>
		</tr>
						
	</tbody>
</table>

###### Returns

<dl>
	
		<dt>
			RequestInterface
		</dt>
		<dd>
			The called instance for method chaining
		</dd>
	
</dl>




### Inherited Methods

[`Transport\Message::get()`](../Message.md#get) [`Transport\Message::set()`](../Message.md#set) 

