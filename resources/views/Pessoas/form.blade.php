    @csrf
    <div class="card">
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">
            @if(isset($pessoa->fotoPerfil))
            <ul class="nav-justified">
            <li class="text-center"><img class="avatar avatar-128 img-circle img-thumbnail" src="data:image/png;base64, {{isset($pessoa->fotoPerfil) ? $pessoa->fotoPerfil : " "}} "/><p>Foto de Perfil</p></li>
            </ul>
            @endif

        <h4 class="col-12 modal-title text-row">Dados pessoais:</h4>
        
        <div class="form-row">
            <div class="form-group col-md-9">
                <label for="nome" class="control-label">Nome: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo"
                        value="{{isset($pessoa->nome) ? $pessoa->nome : old('nome') }}">
                </div>
            </div>
            
            <div class="form-group col-md-3">
			    <label for="sexo">Sexo: *</label>
			    <p>
				    <input type="radio" name="sexo" required value="1" {{(isset($pessoa->sexo) ? $pessoa->sexo : old('sexo')) == 1 ? 'checked' : '' }}>Masculino</input>
				    <input type="radio" name="sexo" required value="2" {{(isset($pessoa->sexo) ? $pessoa->sexo : old('sexo')) == 2 ? 'checked' : '' }}>Feminino</input>
				    <input type="radio" name="sexo" required value="3" {{(isset($pessoa->sexo) ? $pessoa->sexo : old('sexo')) == 3 ? 'checked' : '' }}>Outro</input>
			    </p>
            </div>
            
            <div class="form-group col-md-3">
                <label for="dataNascimento" class="control-label">Data de Nascimento: *</label>
                <div class="input-group">
                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="1/01/2015"
                        value="{{isset($pessoa->data_nascimento) ? $pessoa->data_nascimento : old('data_nascimento') }}">
                </div>
            </div>

            <div class="form-group col-md-3">
                <label for="cpf" class="control-label">CPF: *</label>
                <div class="input-group">
                    <input type="cpf" class="form-control" id="cpf" name="cpf" placeholder="123.456.789-11"
                        value="{{isset($pessoa->cpf) ? $pessoa->cpf : old('cpf') }}">
                </div>
            </div>

            <div class="form-group col-md-3">
                <label for="escolaridade">Escolaridade: *</label>
                <select class="form-control" name="escolaridade" value="{{isset($pessoa->escolaridade) ? $pessoa->escolaridade : old('escolaridade') }}" id="escolaridade">
                <option value="">Selecione sua escolaridade</option>
                  <option value="1" {{(isset($pessoa->escolaridade) ? $pessoa->escolaridade : old('escolaridade')) == 1 ? 'selected' : '' }}>Superior Completo</option>
                  <option value="2" {{(isset($pessoa->escolaridade) ? $pessoa->escolaridade : old('escolaridade')) == 2 ? 'selected' : '' }}>Superior Incompleto</option>
                  <option value="3" {{(isset($pessoa->escolaridade) ? $pessoa->escolaridade : old('escolaridade')) == 3 ? 'selected' : '' }}>Ensino Médio Completo</option>
                  <option value="4" {{(isset($pessoa->escolaridade) ? $pessoa->escolaridade : old('escolaridade')) == 4 ? 'selected' : '' }}>Ensino Médio Incompleto</option>
                  <option value="5" {{(isset($pessoa->escolaridade) ? $pessoa->escolaridade : old('escolaridade')) == 5 ? 'selected' : '' }}>Ensino Fundamental Completo</option>
                  <option value="6" {{(isset($pessoa->escolaridade) ? $pessoa->escolaridade : old('escolaridade')) == 6 ? 'selected' : '' }}>Ensino Fundamental Incompleto</option>
                  <option value="7" {{(isset($pessoa->escolaridade) ? $pessoa->escolaridade : old('escolaridade')) == 7 ? 'selected' : '' }}>Outro</option>
                </select>
              </div>

              <div class="form-group col-md-3">
                <label for="telefone" class="control-label">Telefone: *</label>
                <div class="input-group ">
                    <input type="text" class="form-control phone_with_ddd" name="telefone" id="telefone"
                        value="{{isset($pessoa->telefone) ? $pessoa->telefone : old('telefone') }}"
                        placeholder="(00)0000-0000" />
                </div>
            </div>
      
        <div class="container col-12">
            <h4 class="col-12 modal-title text-row">Endereço:</h5>
            <div class="form-group">
                <label for="email" class="control-label">E-mail: *</label>
                <div class="input-group">
                    <input type="email" class="form-control" name="email" id="email"
                        value="{{isset($pessoa->email) ? $pessoa->email : old('email') }}"
                        placeholder="exemplo@exemplo.com" />
                </div>
            </div>
        </div>
        <div class="container col-12">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="senha">Senha: *</label>
                    <input type="password" class="form-control" {{isset($pessoa->senha) ? 'disabled' : '' }} name="senha" id="senha" placeholder="Senha"
                    value="{{isset($pessoa->senha) ? $pessoa->senha : old('senha') }}">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="confirmarSenha">Confirmar senha: *</label>
                    <input type="password" class="form-control" {{isset($pessoa->confirmarSenha) ? 'disabled' : '' }} name="confirmarSenha" id="confirmarSenha" placeholder="Confirme sua senha"
                    value="{{isset($pessoa->confirmarSenha) ? $pessoa->confirmarSenha : old('confirmarSenha') }}">
                  </div>
                </div>
            </div>
            <div class="container col-12">
                <div class="form-row">
                    <form>
                        <div class="form-group">
                          <label for="fotoPerfil">Adicione sua foto:</label>
                          <input type="file" enctype="multipart/form-data" class="form-control-file" name="fotoPerfil" id="fotoPerfil">
                        </div>
                      </form>
                    </div>
            </div>

            
        </div>
        <div class="container col-12">
            <div class="form-row">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a class="btn btn-secondary" href="{{route('welcome')}}">Cancelar</a>
            </div>
        </div>

    </div>
</form>

<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

{!! JsValidator::formRequest('App\Http\Requests\ValidacaoPessoa') !!}