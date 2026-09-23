<?php 
include_once("conexao.php");


$resultado = mysqli_query($conn, "select * from labs where id_lab = ?, nr_lab = ?");
$stmt


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select em PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>
    body {
      background: #0f172a;
      color: #e2e8f0;
      font-family: 'Segoe UI', system-ui, sans-serif;
      min-height: 100vh;
    }

    .page-header {
      background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
      border-bottom: 1px solid #334155;
      padding: 2rem 0;
      margin-bottom: 2rem;
    }

    .page-header h1 {
      font-weight: 700;
      letter-spacing: -0.5px;
      margin: 0;
    }

    .section-title {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      font-size: 1.35rem;
      font-weight: 600;
      color: #f1f5f9;
      margin-bottom: 1rem;
      padding-bottom: 0.5rem;
      border-bottom: 2px solid #334155;
    }

    .section-title i {
      color: #38bdf8;
      font-size: 1.4rem;
    }

    .card-table {
      background: #1e293b;
      border: 1px solid #334155;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
      margin-bottom: 2.5rem;
    }

    .table {
      margin-bottom: 0;
      color: #e2e8f0;
      --bs-table-bg: transparent;
      --bs-table-striped-bg: transparent;
      --bs-table-hover-bg: transparent;
    }

    .table thead th {
      background: #0f172a !important;
      color: #94a3b8;
      font-weight: 600;
      text-transform: uppercase;
      font-size: 0.75rem;
      letter-spacing: 0.5px;
      border-bottom: 1px solid #334155;
      padding: 1rem 1.25rem;
    }

    .table tbody td {
      padding: 0.9rem 1.25rem;
      border-color: #334155;
      vertical-align: middle;
    }

    .table tbody tr:nth-child(odd) {
      background-color: #1e293b !important;
    }

    .table tbody tr:nth-child(even) {
      background-color: #162032 !important;
    }

    .table tbody tr:hover {
      background-color: #1e3a5f !important;
    }

    .table tbody tr:hover td {
      color: #f1f5f9;
    }

    .badge-code {
      background: #0ea5e9;
      color: #f9f9fa;
      font-weight: 600;
      font-size: 0.8rem;
      padding: 0.3rem 0.6rem;
      border-radius: 6px;
    }

    .btn-opcao {
      width: 34px;
      height: 34px;
      padding: 0;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 8px;
      border: none;
      transition: all 0.2s;
      text-decoration: none;
    }

    .btn-editar {
      background: rgba(56, 189, 248, 0.15);
      color: #38bdf8;
    }

    .btn-editar:hover {
      background: #0ea5e9;
      color: #0f172a;
    }

    .btn-excluir {
      background: rgba(248, 113, 113, 0.15);
      color: #f87171;
    }

    .btn-excluir:hover {
      background: #ef4444;
      color: white;
    }

    .container {
      max-width: 1100px;
    }
  </style>
</head>
<body>

  <div class="page-header">
    <div class="container">
      <h1><i class="bi bi-database me-2"></i> Consultas do Sistema</h1>
      <p class="text-secondary mb-0 mt-1">arrogante, donde quieres</p>
    </div>
  </div>

  <div class="container pb-5">

  
    <div class="section-title">
      <i class="bi bi-people-fill"></i>
      Alunos
    </div>
    <div class="card-table">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">RM</th>
            <th scope="col">Email</th>
            <th scope="col" class="text-center">Opções</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($dados = mysqli_fetch_array($query)) { ?>
            <tr>
              <td><span class="badge-code"><?php echo htmlspecialchars($dados['cd_aluno'], ENT_QUOTES, 'UTF-8'); ?></span></td>
              <td><?php echo htmlspecialchars($dados['nm_aluno'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($dados['ds_matricula'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($dados['ds_email'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td class="text-center">
                <a href="editarCL.php?cd_aluno=<?php echo $dados['cd_aluno']; ?>" class="btn-opcao btn-editar me-1" title="Editar">
                  <i class="bi bi-pencil-fill"></i>
                </a>
                <a href="excluirCL.php?cd_aluno=<?php echo $dados['cd_aluno']; ?>" class="btn-opcao btn-excluir" title="Excluir">
                  <i class="bi bi-trash-fill"></i>
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    
    <div class="section-title">
      <i class="bi bi-person-badge-fill"></i>
      Professores
    </div>
    <div class="card-table">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col" class="text-center">Opções</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($dados1 = mysqli_fetch_array($query1)) { ?>
            <tr>
              <td><span class="badge-code"><?php echo htmlspecialchars($dados1['cd_professor'], ENT_QUOTES, 'UTF-8'); ?></span></td>
              <td><?php echo htmlspecialchars($dados1['nm_professor'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($dados1['ds_email'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td class="text-center">
                
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

   
    <div class="section-title">
      <i class="bi bi-journal-bookmark-fill"></i>
      Matérias
    </div>
    <div class="card-table">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Matéria</th>
            <th scope="col" class="text-center">Opções</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($dados2 = mysqli_fetch_array($query2)) { ?>
            <tr>
              <td><span class="badge-code"><?php echo htmlspecialchars($dados2['cd_materia'], ENT_QUOTES, 'UTF-8'); ?></span></td>
              <td><?php echo htmlspecialchars($dados2['nm_materia'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td class="text-center">
                
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  
    <div class="section-title">
      <i class="bi bi-link-45deg"></i>
      Professor × Matéria
    </div>
    <div class="card-table">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Professor</th>
            <th scope="col">Matéria</th>
            <th scope="col" class="text-center">Opções</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($dados3 = mysqli_fetch_array($query3)) { ?>
            <tr>
              <td><?php echo htmlspecialchars($dados3['professor'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($dados3['materia'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td class="text-center">
               
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


