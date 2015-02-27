# ResponseInterface
## A bare bones interface for response objects

_Copyright (c) 2015, Matthew J. Sahagian_.
_Please reference the LICENSE.md file at the root of this distribution_

#### Namespace

`Inkwell\Transport`

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


## Methods

### Instance Methods
<hr />

#### <span style="color:#3e6a6e;">getRequest()</span>

Get the request associated with this response

###### Returns

<dl>
	
		<dt>
			RequestInterface
		</dt>
		<dd>
			The original request object to which this response responds
		</dd>
	
</dl>


<hr />

#### <span style="color:#3e6a6e;">setRequest()</span>

Set the original request object which triggered the response

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
									Request				
			</td>
			<td>
				The original request object to which this response responds
			</td>
		</tr>
			
	</tbody>
</table>

###### Returns

<dl>
	
		<dt>
			ResponseInterface
		</dt>
		<dd>
			The called instance for method chaining
		</dd>
	
</dl>




